<?php

namespace Jane\JsonSchema\Guesser\Guess;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

class ObjectType extends Type
{
    private $className;

    private $namespace;

    private $discriminants;

    public function __construct($object, $className, $namespace, $discriminants = [])
    {
        parent::__construct($object, 'object');

        $this->namespace = $namespace;
        $this->className = $className;
        $this->discriminants = $discriminants;
    }

    /**
     * (@inheritDoc}.
     */
    protected function createDenormalizationValueStatement(Context $context, Expr $input): Expr
    {
        return new Expr\MethodCall(new Expr\PropertyFetch(new Expr\Variable('this'), 'denormalizer'), 'denormalize', [
            new Arg($input),
            new Arg(new Scalar\String_($this->getFqdn(false))),
            new Arg(new Scalar\String_('json')),
            new Arg(new Expr\Variable('context')),
        ]);
    }

    /**
     * (@inheritDoc}.
     */
    protected function createNormalizationValueStatement(Context $context, Expr $input): Expr
    {
        return new Expr\MethodCall(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizer'), 'normalize', [
            new Arg($input),
            new Arg(new Scalar\String_('json')),
            new Arg(new Expr\Variable('context')),
        ]);
    }

    /**
     * (@inheritDoc}.
     */
    public function createConditionStatement(Expr $input): Expr
    {
        $conditionStatement = parent::createConditionStatement($input);

        foreach ($this->discriminants as $key => $values) {
            $issetCondition = new Expr\FuncCall(
                new Name('isset'),
                [
                    new Arg(new Expr\PropertyFetch($input, sprintf("{'%s'}", $key))),
                ]
            );

            $logicalOr = null;

            if (null !== $values) {
                foreach ($values as $value) {
                    if (null === $logicalOr) {
                        $logicalOr = new Expr\BinaryOp\Equal(
                            new Expr\PropertyFetch($input, sprintf("{'%s'}", $key)),
                            new Scalar\String_($value)
                        );
                    } else {
                        $logicalOr = new Expr\BinaryOp\LogicalOr(
                            $logicalOr,
                            new Expr\BinaryOp\Equal(
                                new Expr\PropertyFetch($input, sprintf("{'%s'}", $key)),
                                new Scalar\String_($value)
                            )
                        );
                    }
                }
            }

            if (null !== $logicalOr) {
                $conditionStatement = new Expr\BinaryOp\LogicalAnd($conditionStatement, new Expr\BinaryOp\LogicalAnd($issetCondition, $logicalOr));
            } else {
                $conditionStatement = new Expr\BinaryOp\LogicalAnd($conditionStatement, $issetCondition);
            }
        }

        return $conditionStatement;
    }

    /**
     * (@inheritDoc}.
     */
    public function getTypeHint($currentNamespace)
    {
        if ('\\' . $currentNamespace . '\\' . $this->className === $this->getFqdn()) {
            return $this->className;
        }

        return $this->getFqdn();
    }

    /**
     * (@inheritDoc}.
     */
    public function getDocTypeHint($namespace)
    {
        return $this->getTypeHint($namespace);
    }

    private function getFqdn($withRoot = true)
    {
        if ($withRoot) {
            return '\\' . $this->namespace . '\\Model\\' . $this->className;
        }

        return $this->namespace . '\\Model\\' . $this->className;
    }
}
