<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetterSetterGenerator
{
    /**
     * The naming service.
     */
    abstract protected function getNaming(): Naming;

    protected function createGetter(Property $property, string $namespace, bool $strict): Stmt\ClassMethod
    {
        $returnType = $property->getType()->getTypeHint($namespace);

        if ($returnType && (!$strict || $property->isNullable())) {
            $returnType = new NullableType($returnType);
        }

        return new Stmt\ClassMethod(
            // getProperty
            $this->getNaming()->getPrefixedMethodName('get', $property->getAccessorName()),
            [
                // public function
                'flags' => Modifiers::PUBLIC,
                'stmts' => [
                    // return $this->property;
                    new Stmt\Return_(
                        new Expr\PropertyFetch(new Expr\Variable('this'), $property->getPhpName())
                    ),
                ],
                'returnType' => $returnType,
            ], [
                'comments' => [$this->createGetterDoc($property, $namespace, $strict)],
            ]
        );
    }

    protected function createSetter(Property $property, string $namespace, bool $strict, bool $fluent = true): Stmt\ClassMethod
    {
        $setType = $property->getType()->getTypeHint($namespace);

        if ($setType && (!$strict || $property->isNullable())) {
            $setType = new NullableType($setType);
        }

        $stmts = [
            new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'initialized'), new Scalar\String_($property->getPhpName())),
                new Expr\ConstFetch(new Name('true'))
            )),
            // $this->property = $property;
            new Stmt\Expression(
                new Expr\Assign(
                    new Expr\PropertyFetch(
                        new Expr\Variable('this'),
                        $property->getPhpName()
                    ), new Expr\Variable($property->getPhpName())
                )
            ),
        ];

        if ($fluent) {
            // return $this;
            $stmts[] = new Stmt\Return_(new Expr\Variable('this'));
        }

        return new Stmt\ClassMethod(
            // setProperty
            $this->getNaming()->getPrefixedMethodName('set', $property->getAccessorName()),
            [
                // public function
                'flags' => Modifiers::PUBLIC,
                // ($property)
                'params' => [
                    new Param(
                        new Expr\Variable($property->getPhpName()),
                        null,
                        $setType
                    ),
                ],
                'stmts' => $stmts,
                'returnType' => $fluent ? new Name('self') : null,
            ], [
                'comments' => [$this->createSetterDoc($property, $namespace, $strict, $fluent)],
            ]
        );
    }

    protected function createGetterDoc(Property $property, string $namespace, bool $strict): Doc
    {
        $description = ['/**'];
        if ($property->getDescription()) {
            foreach (array_map(rtrim(...), explode("\n", $property->getDescription())) as $line) {
                $description[] = ' * ' . $line;
            }
            $description[] = ' *';
        }

        if ($property->isDeprecated()) {
            $description[] = ' * @deprecated';
            $description[] = ' *';
        }

        $description[] = \sprintf(' * @return %s',
            $this->getDocType($property, $namespace, $strict)
        );
        $description[] = ' */';

        return new Doc(implode("\n", $description));
    }

    protected function createSetterDoc(Property $property, string $namespace, bool $strict, bool $fluent): Doc
    {
        $description = ['/**'];
        if ($property->getDescription()) {
            $description[] = ' * ' . $property->getDescription();
            $description[] = ' *';
        }

        $description[] = \sprintf(' * @param %s %s', $this->getDocType($property, $namespace, $strict), '$' . $property->getPhpName());

        if ($property->isDeprecated()) {
            $description[] = ' *';
            $description[] = ' * @deprecated';
        }

        if ($fluent) {
            $description[] = ' *';
            $description[] = ' * @return self';
        }

        $description[] = ' */';

        return new Doc(implode("\n", $description));
    }

    private function getDocType(Property $property, string $namespace, bool $strict): string
    {
        $returnType = $property->getType();
        $returnTypeHint = $returnType->getDocTypeHint($namespace);
        if ($strict && !$property->isNullable()) {
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
