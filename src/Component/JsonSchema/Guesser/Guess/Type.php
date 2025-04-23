<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;

class Type
{
    public const TYPE_BOOLEAN = 'bool';
    public const TYPE_INTEGER = 'int';
    public const TYPE_FLOAT = 'float';
    public const TYPE_STRING = 'string';
    public const TYPE_NULL = 'null';
    public const TYPE_MIXED = 'mixed';
    public const TYPE_ARRAY = 'array';
    public const TYPE_OBJECT = 'object';

    /**
     * @var array<string, string|null>
     */
    protected array $phpMapping = [
        self::TYPE_BOOLEAN => 'bool',
        self::TYPE_INTEGER => 'int',
        self::TYPE_FLOAT => 'float',
        self::TYPE_STRING => 'string',
        self::TYPE_NULL => null,
        self::TYPE_MIXED => null,
        self::TYPE_ARRAY => 'array',
        self::TYPE_OBJECT => null,
    ];

    /**
     * @var array<string, string>
     */
    protected array $conditionMapping = [
        self::TYPE_BOOLEAN => 'is_bool',
        self::TYPE_INTEGER => 'is_int',
        self::TYPE_FLOAT => 'is_float',
        self::TYPE_STRING => 'is_string',
        self::TYPE_NULL => 'is_null',
        self::TYPE_MIXED => 'isset',
        self::TYPE_ARRAY => 'is_array',
        self::TYPE_OBJECT => 'is_array',
    ];

    /**
     * @var array<string, string>
     */
    protected array $normalizationConditionMapping = [
        self::TYPE_BOOLEAN => 'is_bool',
        self::TYPE_INTEGER => 'is_int',
        self::TYPE_FLOAT => 'is_float',
        self::TYPE_STRING => 'is_string',
        self::TYPE_NULL => 'is_null',
        self::TYPE_MIXED => '!is_null',
        self::TYPE_ARRAY => 'is_array',
        self::TYPE_OBJECT => 'is_object',
    ];

    public function __construct(
        protected ?object $object,
        protected string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getObject(): ?object
    {
        return $this->object;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        return [[], $this->createDenormalizationValueStatement($context, $input, $normalizerFromObject)];
    }

    public function createNormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        return [[], $this->createNormalizationValueStatement($context, $input, $normalizerFromObject)];
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return $input;
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return $input;
    }

    public function createConditionStatement(Expr $input): Expr
    {
        return new Expr\FuncCall(
            new Name($this->conditionMapping[$this->name]),
            [
                new Arg($input),
            ]
        );
    }

    public function createNormalizationConditionStatement(Expr $input): Expr
    {
        return new Expr\FuncCall(
            new Name($this->normalizationConditionMapping[$this->name]),
            [
                new Arg($input),
            ]
        );
    }

    public function getTypeHint(string $namespace): Node\Identifier|Name|null
    {
        return \is_string($this->phpMapping[$this->name])
            ? new Node\Identifier($this->phpMapping[$this->name])
            : $this->phpMapping[$this->name]
        ;
    }

    public function getDocTypeHint(string $namespace): string|Name|null
    {
        return (string) $this;
    }
}
