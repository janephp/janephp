<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Options;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;

class EnumType extends Type
{
    /**
     * @param string[] $subNamespace Sub-namespace segments of the enum inside "Model"
     */
    public function __construct(
        ?object $object,
        string $backingType,
        private readonly string $className,
        private readonly string $namespace,
        private readonly array $subNamespace = [],
        private readonly string $unknownValue = Options::ENUMS_UNKNOWN_VALUE_THROW,
    ) {
        parent::__construct($object, $backingType);
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        $value = $this->createUnionBranchValueStatement($input);

        if (Options::ENUMS_UNKNOWN_VALUE_THROW === $this->unknownValue) {
            return $value;
        }

        // tryFrom() only accepts the backing type: null or another type reads as unknown.
        $unknown = Options::ENUMS_UNKNOWN_VALUE_SCALAR === $this->unknownValue ? $input : new Expr\ConstFetch(new Name('null'));

        return new Expr\Ternary(parent::createConditionStatement($input), $value, $unknown);
    }

    /**
     * Build the value of a union branch, whose condition already checked the backing type.
     */
    public function createUnionBranchValueStatement(Expr $input): Expr
    {
        $value = new Expr\StaticCall(
            new FullyQualified($this->getFqdn(false)),
            Options::ENUMS_UNKNOWN_VALUE_THROW === $this->unknownValue ? 'from' : 'tryFrom',
            [
                new Arg($input),
            ]
        );

        return Options::ENUMS_UNKNOWN_VALUE_SCALAR === $this->unknownValue ? new Expr\BinaryOp\Coalesce($value, $input) : $value;
    }

    /**
     * Build the condition of a union branch: when another enum branch with the same backing type
     * follows, a value this enum does not know is left for that branch.
     */
    public function createUnionBranchConditionStatement(Expr $input, bool $sameBackingTypeFollows): Expr
    {
        $condition = $this->createConditionStatement($input);

        if (!$sameBackingTypeFollows || Options::ENUMS_UNKNOWN_VALUE_THROW === $this->unknownValue) {
            return $condition;
        }

        return new Expr\BinaryOp\BooleanAnd($condition, new Expr\BinaryOp\NotIdentical(
            new Expr\StaticCall(new FullyQualified($this->getFqdn(false)), 'tryFrom', [new Arg($input)]),
            new Expr\ConstFetch(new Name('null'))
        ));
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true, bool $inputMayBeNull = true): Expr
    {
        return match ($this->unknownValue) {
            Options::ENUMS_UNKNOWN_VALUE_NULL => $inputMayBeNull ? new Expr\NullsafePropertyFetch($input, 'value') : new Expr\PropertyFetch($input, 'value'),
            Options::ENUMS_UNKNOWN_VALUE_SCALAR => new Expr\Ternary($this->createInstanceOfCondition($input), new Expr\PropertyFetch($input, 'value'), $input),
            default => new Expr\PropertyFetch($input, 'value'),
        };
    }

    public function createNormalizationConditionStatement(Expr $input): Expr
    {
        return match ($this->unknownValue) {
            Options::ENUMS_UNKNOWN_VALUE_SCALAR => new Expr\BinaryOp\BooleanOr($this->createInstanceOfCondition($input), parent::createNormalizationConditionStatement($input)),
            default => $this->createInstanceOfCondition($input),
        };
    }

    /**
     * Tell whether denormalizing reads an unknown value as null.
     */
    public function canBeNull(): bool
    {
        return Options::ENUMS_UNKNOWN_VALUE_NULL === $this->unknownValue;
    }

    /**
     * Build the native type: the enum, or in "scalar" mode a union of the enum and its backing type.
     */
    public function getNativeTypeHint(string $namespace, bool $nullable): Node\ComplexType|Node\Identifier|Name|null
    {
        if (Options::ENUMS_UNKNOWN_VALUE_SCALAR !== $this->unknownValue) {
            return parent::getNativeTypeHint($namespace, $nullable);
        }

        $types = [$this->getTypeHint($namespace), new Node\Identifier($this->getName())];
        if ($nullable) {
            $types[] = new Node\Identifier('null');
        }

        return new Node\UnionType($types);
    }

    public function getTypeHint(string $namespace): Name
    {
        if ('\\' . $namespace . '\\' . $this->className === $this->getFqdn()) {
            return new Name($this->className);
        }

        return new Name($this->getFqdn());
    }

    public function getDocTypeHint(string $namespace): string|Name
    {
        $unknownValueType = $this->getUnknownValueType();

        return null === $unknownValueType ? $this->getTypeHint($namespace) : $this->getTypeHint($namespace) . '|' . $unknownValueType;
    }

    /**
     * Return the type an unknown value keeps next to the enum: the backing type in "scalar" mode, otherwise null.
     */
    public function getUnknownValueType(): ?string
    {
        return Options::ENUMS_UNKNOWN_VALUE_SCALAR === $this->unknownValue ? $this->getName() : null;
    }

    private function createInstanceOfCondition(Expr $input): Expr
    {
        return new Expr\Instanceof_(
            $input,
            new FullyQualified($this->getFqdn(false))
        );
    }

    private function getFqdn(bool $withRoot = true): string
    {
        $subNamespaceSuffix = [] === $this->subNamespace ? '' : '\\' . implode('\\', $this->subNamespace);

        if ($withRoot) {
            return '\\' . $this->namespace . '\\Model' . $subNamespaceSuffix . '\\' . $this->className;
        }

        return $this->namespace . '\\Model' . $subNamespaceSuffix . '\\' . $this->className;
    }
}
