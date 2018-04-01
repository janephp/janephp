<?php

namespace Jane\AutoMapper\Compiler\Type;

use Jane\AutoMapper\Compiler\Access;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
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
    const TYPE_RESOURCE = 'resource';
    const TYPE_CALLABLE = 'callable';
    const TYPE_ITERABLE = 'iterable';

    protected $phpMapping = [
        self::TYPE_BOOLEAN => 'bool',
        self::TYPE_INTEGER => 'int',
        self::TYPE_FLOAT => 'float',
        self::TYPE_STRING => 'string',
        self::TYPE_NULL => null,
        self::TYPE_MIXED => null,
        self::TYPE_ARRAY => 'array',
        self::TYPE_OBJECT => null,
        self::TYPE_RESOURCE => null,
        self::TYPE_CALLABLE => 'callable',
        self::TYPE_ITERABLE => 'iterable',
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
        self::TYPE_RESOURCE => 'is_resource',
        self::TYPE_CALLABLE => 'is_callable',
        self::TYPE_ITERABLE => 'is_iterable',
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
        self::TYPE_RESOURCE => 'is_resource',
        self::TYPE_CALLABLE => 'is_callable',
        self::TYPE_ITERABLE => 'is_iterable',
    ];

    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function isArray()
    {
        return $this->name === self::TYPE_ARRAY;
    }

    public function isEqual(Type $type)
    {
        return $type->getName() === $this->name;
    }

    public function createMappingStatements(Access $readAccess, Access $writeAccess, Expr\Variable $input, Expr\Variable $output, UniqueVariableScope $uniqueVariableScope): array
    {
        return [
            $writeAccess->getWriteExpression($output, $this->createMappingValueExpression($readAccess, $input, $uniqueVariableScope))
        ];
    }

    public function createMappingValueExpression(Access $access, Expr\Variable $input, UniqueVariableScope $uniqueVariableScope): Expr
    {
        return $access->getReadExpression($input);
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
     * @return null|string|Name
     */
    public function getTypeHint($namespace)
    {
        return $this->phpMapping[$this->name];
    }

    /**
     * @return null|string|Name
     */
    public function getDocTypeHint($namespace)
    {
        return (string) $this;
    }
}
