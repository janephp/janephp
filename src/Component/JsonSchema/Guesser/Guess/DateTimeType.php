<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/**
 * Represent a DateTime type.
 */
class DateTimeType extends ObjectType
{
    use CheckNullableTrait;

    /**
     * RFC 3339 strings come in slightly different shapes that the strict
     * \DateTimeInterface::RFC3339 format cannot all parse: an explicit `Z`
     * designator instead of a numeric offset, and optional fractional seconds.
     * This pattern recognizes exactly those shapes, without ever accepting
     * relative date strings ("tomorrow", "now", ...) that a bare
     * `new \DateTime($input)` would happily parse.
     */
    public const RFC3339_LENIENT_PATTERN = '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/';

    /**
     * Format of the date to use when normalized.
     */
    private string $outputFormat;

    /**
     * Format of the date to use when denormalized.
     */
    private string $inputFormat;

    /**
     * @param bool|null $preferInterface indicator whether to use DateTime or DateTimeInterface as type hint
     */
    public function __construct(
        object $object,
        string $outputFormat = \DateTimeInterface::RFC3339,
        ?string $inputFormat = null,
        private ?bool $preferInterface = null,
    ) {
        parent::__construct($object, '\DateTime', '', []);

        $this->outputFormat = $outputFormat;
        $this->inputFormat = $inputFormat ?? $outputFormat;
        $this->preferInterface = $preferInterface ?? false;
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return $this->generateParseExpression($input);
    }

    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        if (empty($this->inputFormat)) {
            return parent::createDenormalizationStatement($context, $input, $normalizerFromObject);
        }

        // \DateTime::createFromFormat returns false on failure, report it with a clean
        // exception instead of letting it reach the typed setter
        $output = new Expr\Variable($context->getUniqueVariableName('date'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $this->generateParseExpression($input))),
        ];

        if ($this->isLenientRfc3339()) {
            $statements[] = new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('false')), $output), [
                'stmts' => $this->generateLenientFallbackStatements($context, $input, $output),
            ]);
        } else {
            $statements[] = new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('false')), $output), [
                'stmts' => [
                    new Stmt\Expression(new Expr\Throw_(new Expr\New_(
                        new Name\FullyQualified(\sprintf('%s\\Runtime\\Normalizer\\InvalidDateException', $context->getCurrentSchema()->getNamespace())),
                        [
                            new Arg($input),
                            new Arg(new Scalar\String_($this->inputFormat)),
                        ]
                    ))),
                ],
            ]);
        }

        return [$statements, $output];
    }

    /**
     * Lenient parsing is restricted to the RFC 3339 default input format:
     * custom `date-input-format` values keep the strict behavior so that
     * user-specified formats are never silently reinterpreted.
     */
    private function isLenientRfc3339(): bool
    {
        return \DateTimeInterface::RFC3339 === $this->inputFormat;
    }

    /**
     * When the strict parse of the RFC 3339 input format fails, retry with a
     * bare `new \DateTime($input)`, which accepts the `Z` designator and
     * fractional seconds that the strict format rejects. The retry is gated on
     * the strict RFC 3339 shape regex so that a bare `new \DateTime` cannot
     * accept relative date strings ("tomorrow", "now", ...) or any other
     * non-RFC 3339 shape. Values failing the gate keep the clean
     * InvalidDateException. Note that well-shaped but impossible values
     * ("2026-02-30T25:61:61Z") are rolled over by `new \DateTime` the same way
     * they are by any parser without explicit calendar validation; the
     * deny-by-shape regex used by the validation generator has the same
     * tolerance, so the denormalizer and the validator stay in sync.
     *
     * @return Stmt[]
     */
    private function generateLenientFallbackStatements(Context $context, Expr $input, Expr $output): array
    {
        $throwInvalidDate = function () use ($context, $input): Stmt\Expression {
            return new Stmt\Expression(new Expr\Throw_(new Expr\New_(
                new Name\FullyQualified(\sprintf('%s\\Runtime\\Normalizer\\InvalidDateException', $context->getCurrentSchema()->getNamespace())),
                [
                    new Arg($input),
                    new Arg(new Scalar\String_($this->inputFormat)),
                ]
            )));
        };

        // $date = new \DateTime($input);
        $lenientParse = new Stmt\TryCatch(
            [new Stmt\Expression(new Expr\Assign($output, new Expr\New_(new Name('\DateTime'), [new Arg($input)])))],
            [new Stmt\Catch_([new Name\FullyQualified(\Exception::class)], null, [$throwInvalidDate()])],
            null
        );

        return [
            new Stmt\If_(new Expr\BinaryOp\LogicalAnd(
                new Expr\FuncCall(new Name('is_string'), [new Arg($input)]),
                new Expr\BinaryOp\Identical(
                    new Scalar\LNumber(1),
                    new Expr\FuncCall(new Name('preg_match'), [
                        new Arg(new Scalar\String_(self::RFC3339_LENIENT_PATTERN)),
                        new Arg($input),
                    ])
                )
            ), [
                'stmts' => [$lenientParse],
                'else' => new Stmt\Else_([$throwInvalidDate()]),
            ]),
        ];
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        if ($this->isNullable($this->object)) {
            // $object?->format($format);
            return new Expr\NullsafeMethodCall($input, 'format', [
                new Arg(new Scalar\String_($this->outputFormat)),
            ]);
        }

        // $object->format($format);
        return new Expr\MethodCall($input, 'format', [
            new Arg(new Scalar\String_($this->outputFormat)),
        ]);
    }

    public function createConditionStatement(Expr $input): Expr
    {
        if (!$this->isLenientRfc3339()) {
            return new Expr\BinaryOp\LogicalAnd(new Expr\FuncCall(
                new Name('is_string'), [
                    new Arg($input),
                ]),
                new Expr\BinaryOp\NotIdentical(
                    new Expr\ConstFetch(new Name('false')),
                    $this->generateParseExpression($input)
                )
            );
        }

        // Lenient RFC 3339 condition: a string routes to the date branch when
        // the strict parse succeeds, or when it matches a strict RFC 3339
        // shape that the strict format cannot parse (a `Z` designator or
        // fractional seconds). The regex is deliberately narrow so that
        // relative date strings ("tomorrow", "now", ...) which a bare
        // `new \DateTime($input)` would accept, and any other malformed
        // string, do NOT match the date branch: they fall through to the
        // final InvalidDateException fallback appended by
        // MultipleType::appendDateFallbackStatements().
        return new Expr\BinaryOp\LogicalOr(
            new Expr\BinaryOp\LogicalAnd(
                new Expr\FuncCall(new Name('is_string'), [new Arg($input)]),
                new Expr\BinaryOp\NotIdentical(
                    new Expr\ConstFetch(new Name('false')),
                    $this->generateParseExpression($input)
                )
            ),
            new Expr\BinaryOp\LogicalAnd(
                new Expr\FuncCall(new Name('is_string'), [new Arg($input)]),
                new Expr\BinaryOp\Identical(
                    new Scalar\LNumber(1),
                    new Expr\FuncCall(new Name('preg_match'), [
                        new Arg(new Scalar\String_(self::RFC3339_LENIENT_PATTERN)),
                        new Arg($input),
                    ])
                )
            )
        );
    }

    public function getInputFormat(): string
    {
        return $this->inputFormat;
    }

    public function getTypeHint(string $namespace): Name
    {
        return new Name($this->preferInterface ? '\DateTimeInterface' : '\DateTime');
    }

    public function __toString(): string
    {
        return '\DateTime';
    }

    protected function generateParseExpression(Expr $input): Expr
    {
        if (empty($this->inputFormat)) {
            // new \DateTime($data)
            $new = new Expr\New_(new Name('\DateTime'), [new Arg($input)]);
            // (new \DateTime($data))->getTimezone()->getName()
            $timezoneName = new Expr\MethodCall(
                new Expr\MethodCall($new, 'getTimezone'),
                'getName'
            );
            // new \DateTimeZone('GMT')
            $gmtTimezone = new Expr\New_(new Name('\DateTimeZone'), [new Scalar\String_('GMT')]);

            // (new \DateTime($data))->getTimezone()->getName() === 'Z' ? (new \DateTime($data))->setTimezone(new \DateTimeZone('GMT')) : \DateTime($data)
            return new Expr\Ternary(
                new Expr\BinaryOp\Equal($timezoneName, new Scalar\String_('Z')),
                new Expr\MethodCall($new, 'setTimezone', [new Arg($gmtTimezone)]),
                $new
            );
        }

        // \DateTime::createFromFormat($format, $data)
        return new Expr\StaticCall(new Name('\DateTime'), 'createFromFormat', [
            new Arg(new Scalar\String_($this->inputFormat)),
            new Arg($input),
        ]);
    }
}
