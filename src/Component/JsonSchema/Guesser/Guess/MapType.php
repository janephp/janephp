<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;

class MapType extends ArrayType
{
    public function __construct(object $object, Type $itemType)
    {
        parent::__construct($object, $itemType, 'object');

        $this->itemType = $itemType;
    }

    public function getTypeHint(string $namespace): Identifier
    {
        return new Identifier('iterable');
    }

    public function getDocTypeHint(string $namespace): string|Name|null
    {
        return new Name(\sprintf('array<string, %s>', $this->getItemType()->getDocTypeHint($namespace)));
    }

    protected function createArrayValueStatement(): Expr
    {
        return new Expr\New_(new Name('\ArrayObject'), [
            new Expr\Array_(),
            new Expr\ClassConstFetch(new Name('\ArrayObject'), 'ARRAY_AS_PROPS'),
        ]);
    }

    protected function createNormalizationArrayValueStatement(): Expr
    {
        return new Expr\Array_();
    }

    protected function createLoopKeyStatement(Context $context): Expr
    {
        return new Expr\Variable($context->getUniqueVariableName('key'));
    }

    protected function createLoopOutputAssignement(Expr $valuesVar, $loopKeyVar): Expr
    {
        return new Expr\ArrayDimFetch($valuesVar, $loopKeyVar);
    }

    protected function createNormalizationLoopOutputAssignement(Expr $valuesVar, $loopKeyVar): Expr
    {
        return new Expr\ArrayDimFetch($valuesVar, $loopKeyVar);
    }
}
