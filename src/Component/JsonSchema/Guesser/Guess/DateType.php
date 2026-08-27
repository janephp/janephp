<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/**
 * Represent a Date type.
 */
class DateType extends ObjectType
{
    use CheckNullableTrait;

    /**
     * Indicator whether to use DateTime or DateTimeInterface as type hint.
     */
    private bool $preferInterface;

    /**
     * @param string $format Format of the date to use
     */
    public function __construct(
        object $object,
        private string $format = 'Y-m-d',
        ?bool $preferInterface = null,
    ) {
        parent::__construct($object, '\DateTime', '', []);

        $this->preferInterface = $preferInterface ?? false;
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        // \DateTime::createFromFormat($format, $data)->setTime(0, 0, 0)
        return new Expr\MethodCall(
            new Expr\StaticCall(
                new Name('\DateTime'),
                'createFromFormat',
                [
                    new Arg(new Scalar\String_($this->format)),
                    new Arg($input),
                ]
            ),
            'setTime',
            [
                new Arg(new Scalar\LNumber(0)),
                new Arg(new Scalar\LNumber(0)),
                new Arg(new Scalar\LNumber(0)),
            ]);
    }

    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        // \DateTime::createFromFormat returns false on failure, report it with a clean
        // exception instead of letting it reach the typed setter, and only call
        // setTime() on a verified \DateTime instance
        $output = new Expr\Variable($context->getUniqueVariableName('date'));
        $statements = [
            new Stmt\Expression(new Expr\Assign(
                $output,
                new Expr\StaticCall(
                    new Name('\DateTime'),
                    'createFromFormat',
                    [
                        new Arg(new Scalar\String_($this->format)),
                        new Arg($input),
                    ]
                )
            )),
            new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('false')), $output), [
                'stmts' => [
                    new Stmt\Expression(new Expr\Throw_(new Expr\New_(
                        new Name\FullyQualified(\sprintf('%s\\Runtime\\Normalizer\\InvalidDateException', $context->getCurrentSchema()->getNamespace())),
                        [
                            new Arg($input),
                            new Arg(new Scalar\String_($this->format)),
                        ]
                    ))),
                ],
            ]),
        ];

        return [$statements, new Expr\MethodCall(
            $output,
            'setTime',
            [
                new Arg(new Scalar\LNumber(0)),
                new Arg(new Scalar\LNumber(0)),
                new Arg(new Scalar\LNumber(0)),
            ]),
        ];
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        if ($this->isNullable($this->object)) {
            // $object?->format($format);
            return new Expr\NullsafeMethodCall($input, 'format', [
                new Arg(new Scalar\String_($this->format)),
            ]);
        }

        // $object->format($format);
        return new Expr\MethodCall($input, 'format', [
            new Arg(new Scalar\String_($this->format)),
        ]);
    }

    public function createConditionStatement(Expr $input): Expr
    {
        return new Expr\BinaryOp\LogicalAnd(new Expr\FuncCall(
            new Name('is_string'), [
                new Arg($input),
            ]),
            new Expr\BinaryOp\NotIdentical(
                new Expr\ConstFetch(new Name('false')),
                new Expr\StaticCall(
                    new Name('\DateTime'),
                    'createFromFormat',
                    [
                        new Arg(new Scalar\String_($this->format)),
                        new Arg($input),
                    ]
                )
            )
        );
    }

    public function getInputFormat(): string
    {
        return $this->format;
    }

    public function getTypeHint(string $namespace): Name
    {
        return new Name($this->preferInterface ? '\DateTimeInterface' : '\DateTime');
    }

    public function __toString(): string
    {
        return '\DateTime';
    }
}
