<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;

trait PropertyGenerator
{
    /**
     * The naming service
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * Return a property stmt
     *
     * @param string      $name
     * @param Type        $type
     * @param string|null $default
     *
     * @return Stmt\Property
     */
    protected function createProperty($name, Type $type, $namespace, $default = null)
    {
        $propertyName = $this->getNaming()->getPropertyName($name);
        $property     = new Stmt\PropertyProperty($propertyName);

        if ($default !== null) {
            $property->default = new Expr\ConstFetch(new Name($default));
        }

        return new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
            $property
        ], [
            'comments' => [$this->createPropertyDoc($type, $namespace)]
        ]);
    }

    /**
     * Get php doc for parameter
     *
     * @param Type $type
     *
     * @return Doc
     */
    protected function createPropertyDoc(Type $type, $namespace)
    {
        return new Doc(sprintf(<<<EOD
/**
 * @var %s
 */
EOD
        , $type->getDocTypeHint($namespace)));
    }
}
