<?php

namespace Jane\AutoMapper\Compiler\Type;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;

class MapType extends ArrayType
{
    public function __construct(Type $itemType)
    {
        parent::__construct($itemType, 'object');

        $this->itemType = $itemType;
    }

    /**
     * (@inheritDoc}.
     */
    public function getTypeHint($namespace)
    {
        return new Name('\ArrayObject');
    }

    public function isArray()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function createArrayValueStatement(): Expr
    {
        return new Expr\New_(new Name('\ArrayObject'), [
            new Expr\Array_(),
            new Expr\ClassConstFetch(new Name('\ArrayObject'), 'ARRAY_AS_PROPS'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function createNormalizationArrayValueStatement(): Expr
    {
        return new Expr\New_(new Name('\stdClass'));
    }

    /**
     * {@inheritdoc}
     */
    protected function createLoopKeyStatement(UniqueVariableScope $uniqueVariableScope): Expr
    {
        return new Expr\Variable($uniqueVariableScope->getUniqueName('key'));
    }

    /**
     * {@inheritdoc}
     */
    protected function createLoopOutputAssignement(Expr $valuesVar, $loopKeyVar): Expr
    {
        return new Expr\ArrayDimFetch($valuesVar, $loopKeyVar);
    }

    /**
     * {@inheritdoc}
     */
    protected function createNormalizationLoopOutputAssignement(Expr $valuesVar, $loopKeyVar): Expr
    {
        return new Expr\PropertyFetch($valuesVar, $loopKeyVar);
    }
}
