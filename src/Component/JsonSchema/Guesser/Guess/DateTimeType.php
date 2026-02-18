<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;

/**
 * Represent a DateTime type.
 */
class DateTimeType extends ObjectType
{
    use CheckNullableTrait;

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
