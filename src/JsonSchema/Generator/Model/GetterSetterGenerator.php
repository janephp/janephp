<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Schema;
use PhpParser\Comment\Doc;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;

trait GetterSetterGenerator
{
    /**
     * The naming service
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * Create get method.
     *
     * @param $name
     * @param Type $type
     * @param string $namespace
     *
     * @return Stmt\ClassMethod
     */
    protected function createGetter($name, Type $type, $namespace, $required = false)
    {
        $returnType = $type->getTypeHint($namespace);

        if ($returnType && !$required) {
            $returnType = '?' . $returnType;
        }

        return new Stmt\ClassMethod(
            // getProperty
            $this->getNaming()->getPrefixedMethodName('get', $name),
            [
                // public function
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [
                    // return $this->property;
                    new Stmt\Return_(
                        new Expr\PropertyFetch(new Expr\Variable('this'), $this->getNaming()->getPropertyName($name))
                    ),
                ],
                'returnType' => $returnType
            ], [
                'comments' => [$this->createGetterDoc($type, $namespace)],
            ]
        );
    }

    /**
     * Create set method.
     *
     * @param $name
     * @param Type $type
     * @param string $namespace
     *
     * @return Stmt\ClassMethod
     */
    protected function createSetter($name, Type $type, $namespace, $required = false)
    {
        $setType = $type->getTypeHint($namespace);

        if ($setType && !$required) {
            $setType = '?' . $setType;
        }

        return new Stmt\ClassMethod(
            // setProperty
            $this->getNaming()->getPrefixedMethodName('set', $name),
            [
                // public function
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                // ($property)
                'params' => [
                    new Param($this->getNaming()->getPropertyName($name), null, $setType),
                ],
                'stmts' => [
                    // $this->property = $property;
                    new Expr\Assign(
                        new Expr\PropertyFetch(
                            new Expr\Variable('this'),
                            $this->getNaming()->getPropertyName($name)
                        ), new Expr\Variable($this->getNaming()->getPropertyName($name))
                    ),
                    // return $this;
                    new Stmt\Return_(new Expr\Variable('this')),
                ],
                'returnType' => 'self'
            ], [
                'comments' => [$this->createSetterDoc($name, $type, $namespace)],
            ]
        );
    }

    /**
     * Return doc for get method.
     *
     * @param Type $type
     * @param string $namespace
     *
     * @return Doc
     */
    protected function createGetterDoc(Type $type, $namespace)
    {
        return new Doc(sprintf(<<<EOD
/**
 * @return %s
 */
EOD
        , $type->getDocTypeHint($namespace)));
    }

    /**
     * Return doc for set method.
     *
     * @param $name
     * @param Type $type
     * @param string $namespace
     *
     * @return Doc
     */
    protected function createSetterDoc($name, Type $type, $namespace)
    {
        return new Doc(sprintf(<<<EOD
/**
 * @param %s %s
 *
 * @return self
 */
EOD
        , $type->getDocTypeHint($namespace), '$'.$this->getNaming()->getPropertyName($name)));
    }
}
