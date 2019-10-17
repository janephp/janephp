<?php

namespace Jane\JsonSchema\Guesser\Guess;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;

class Type
{
    const TYPE_BOOLEAN = 'bool';
    const TYPE_INTEGER = 'int';
    const TYPE_FLOAT = 'float';
    const TYPE_STRING = 'string';
    const TYPE_NULL = 'null';
    const TYPE_MIXED = 'mixed';
    const TYPE_ARRAY = 'array';
    const TYPE_OBJECT = 'object';

    protected $phpMapping = [
        self::TYPE_BOOLEAN => 'bool',
        self::TYPE_INTEGER => 'int',
        self::TYPE_FLOAT => 'float',
        self::TYPE_STRING => 'string',
        self::TYPE_NULL => null,
        self::TYPE_MIXED => null,
        self::TYPE_ARRAY => 'array',
        self::TYPE_OBJECT => null,
    ];

    protected $conditionMapping = [
        self::TYPE_BOOLEAN => 'is_bool',
        self::TYPE_INTEGER => 'is_int',
        self::TYPE_FLOAT => 'is_float',
        self::TYPE_STRING => 'is_string',
        self::TYPE_NULL => 'is_null',
        self::TYPE_MIXED => 'isset',
        self::TYPE_ARRAY => 'is_array',
        self::TYPE_OBJECT => 'is_object',
    ];

    protected $normalizationConditionMapping = [
        self::TYPE_BOOLEAN => 'is_bool',
        self::TYPE_INTEGER => 'is_int',
        self::TYPE_FLOAT => 'is_float',
        self::TYPE_STRING => 'is_string',
        self::TYPE_NULL => 'is_null',
        self::TYPE_MIXED => '!is_null',
        self::TYPE_ARRAY => 'is_array',
        self::TYPE_OBJECT => 'is_object',
    ];

    protected $name;

    protected $object;

    public function __construct($object, string $name)
    {
        $this->name = $name;
        $this->object = null;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function __toString()
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

    /**
     * @return string|Name|null
     */
    public function getTypeHint($namespace)
    {
        return $this->phpMapping[$this->name];
    }

    /**
     * @return string|Name|null
     */
    public function getDocTypeHint($namespace)
    {
        return (string) $this;
    }
}
