<?php

namespace Jane\JsonSchema\Guesser\Guess;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;

/**
 * Represent a DateTime type.
 */
class DateTimeType extends ObjectType
{
    /**
     * Format of the date to use when normalized.
     *
     * @var string
     */
    private $outputFormat;

    /**
     * Format of the date to use when denormalized.
     *
     * @var string
     */
    private $inputFormat;

    /**
     * Indicator whether to use DateTime or DateTimeInterface as type hint.
     *
     * @var bool
     */
    private $preferInterface;

    public function __construct(object $object, string $outputFormat = \DateTime::RFC3339, ?string $inputFormat = null, ?bool $preferInterface = null)
    {
        parent::__construct($object, '\DateTime', '', []);

        $this->outputFormat = $outputFormat;
        $this->inputFormat = $inputFormat ?? $outputFormat;
        $this->preferInterface = $preferInterface ?? false;
    }

    /**
     * (@inheritDoc}.
     */
    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return $this->generateParseExpression($input);
    }

    /**
     * (@inheritDoc}.
     */
    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        // $object->format($format);
        return new Expr\MethodCall($input, 'format', [
            new Arg(new Scalar\String_($this->outputFormat)),
        ]);
    }

    /**
     * (@inheritDoc}.
     */
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

    public function getTypeHint(string $namespace)
    {
        return $this->preferInterface ? '\DateTimeInterface' : '\DateTime';
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
                new Expr\MethodCall($new, new Name('getTimezone')),
                new Name('getName')
            );
            // new \DateTimeZone('GMT')
            $gmtTimezone = new Expr\New_(new Name('\DateTimeZone'), [new Scalar\String_('GMT')]);
            // (new \DateTime($data))->getTimezone()->getName() === 'Z' ? (new \DateTime($data))->setTimezone(new \DateTimeZone('GMT')) : \DateTime($data)
            return new Expr\Ternary(
                new Expr\BinaryOp\Equal($timezoneName, new Scalar\String_('Z')),
                new Expr\MethodCall($new, new Name('setTimezone'), [new Arg($gmtTimezone)]),
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
