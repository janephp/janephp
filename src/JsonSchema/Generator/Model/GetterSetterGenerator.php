<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\Guess\Property;
use function Jane\parserExpression;
use function Jane\parserVariable;
use Jane\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;

trait GetterSetterGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    protected function createGetter(Property $property, string $namespace, bool $required = false): Stmt\ClassMethod
    {
        $returnType = $property->getType()->getTypeHint($namespace);

        if ($returnType && !$required) {
            $returnType = '?' . $returnType;
        }

        return new Stmt\ClassMethod(
            // getProperty
            $this->getNaming()->getPrefixedMethodName('get', $property->getPhpName()),
            [
                // public function
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [
                    // return $this->property;
                    new Stmt\Return_(
                        new Expr\PropertyFetch(new Expr\Variable('this'), $property->getPhpName())
                    ),
                ],
                'returnType' => $returnType,
            ], [
                'comments' => [$this->createGetterDoc($property, $namespace, $required)],
            ]
        );
    }

    protected function createSetter(Property $property, string $namespace, bool $required = false, bool $fluent = true): Stmt\ClassMethod
    {
        $setType = $property->getType()->getTypeHint($namespace);

        if ($setType && !$required) {
            $setType = '?' . $setType;
        }

        $stmts = [
            // $this->property = $property;
            parserExpression(new Expr\Assign(
                new Expr\PropertyFetch(
                    new Expr\Variable('this'),
                    $this->getNaming()->getPropertyName($property->getPhpName())
                ), new Expr\Variable($this->getNaming()->getPropertyName($property->getPhpName()))
            )),
        ];

        if ($fluent) {
            // return $this;
            $stmts[] = new Stmt\Return_(new Expr\Variable('this'));
        }

        return new Stmt\ClassMethod(
            // setProperty
            $this->getNaming()->getPrefixedMethodName('set', $property->getPhpName()),
            [
                // public function
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                // ($property)
                'params' => [
                    new Param(parserVariable($this->getNaming()->getPropertyName($property->getPhpName())), null, $setType),
                ],
                'stmts' => $stmts,
                'returnType' => $fluent ? 'self' : null,
            ], [
                'comments' => [$this->createSetterDoc($property, $namespace, $required, $fluent)],
            ]
        );
    }

    protected function createGetterDoc(Property $property, string $namespace, bool $required): Doc
    {
        return new Doc(sprintf(<<<EOD
/**
 * %s
 *
 * @return %s
 */
EOD
        , $property->getDescription(), $this->getDocType($property, $namespace, $required)));
    }

    protected function createSetterDoc(Property $property, string $namespace, bool $required, bool $fluent): Doc
    {
        $description = sprintf(<<<EOD
/**
 * %s
 *
 * @param %s %s
EOD
            , $property->getDescription(), $this->getDocType($property, $namespace, $required), '$' . $property->getPhpName());

        if ($fluent) {
            $description .= <<<EOD

 *
 * @return self
EOD;
        }

        $description .= <<<EOD

 */
EOD;

        return new Doc($description);
    }

    private function getDocType(Property $property, string $namespace, bool $required): string
    {
        $returnType = $property->getType();
        $returnTypeHint = $returnType->getDocTypeHint($namespace);
        if ($required) {
            return $returnTypeHint;
        }
        $returnTypes = [$returnType];
        if ($returnType instanceof MultipleType) {
            $returnTypes = $returnType->getTypes();
        }
        if (!\count(array_intersect([Type::TYPE_MIXED, Type::TYPE_NULL], $returnTypes))) {
            $returnTypeHint .= '|' . Type::TYPE_NULL;
        }

        return $returnTypeHint;
    }
}
