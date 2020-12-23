<?php

namespace Jane\JsonSchema\Guesser\Guess;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;

class MapType extends ArrayType
{
    public function __construct(object $object, Type $itemType)
    {
        parent::__construct($object, $itemType, 'object');

        $this->itemType = $itemType;
    }

    public function getTypeHint(string $namespace)
    {
        return new Name('iterable');
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
        return new Expr\Array_();
    }

    /**
     * {@inheritdoc}
     */
    protected function createLoopKeyStatement(Context $context): Expr
    {
        return new Expr\Variable($context->getUniqueVariableName('key'));
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
        return new Expr\ArrayDimFetch($valuesVar, $loopKeyVar);
    }
}
