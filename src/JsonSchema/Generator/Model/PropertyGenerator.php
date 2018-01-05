<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\Property;
use PhpParser\Comment\Doc;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;

trait PropertyGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    protected function createProperty(Property $property, $namespace, $default = null): Stmt
    {
        $propertyName = $this->getNaming()->getPropertyName($property->getName());
        $propertyStmt = new Stmt\PropertyProperty($propertyName);

        if (null !== $default) {
            $propertyStmt->default = new Expr\ConstFetch(new Name($default));
        }

        return new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
            $propertyStmt,
        ], [
            'comments' => [$this->createPropertyDoc($property, $namespace)],
        ]);
    }

    protected function createPropertyDoc(Property $property, $namespace): Doc
    {
        return new Doc(sprintf(<<<EOD
/**
 * %s
 *
 * @var %s
 */
EOD
        , $property->getDescription(), $property->getType()->getDocTypeHint($namespace)));
    }
}
