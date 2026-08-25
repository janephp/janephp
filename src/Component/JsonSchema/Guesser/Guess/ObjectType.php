<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Scalar;

class ObjectType extends Type
{
    /**
     * @param array<string, array<string>|null> $discriminants
     * @param string[]                          $subNamespace  Sub-namespace segments of the model inside "Model"
     */
    public function __construct(
        object $object,
        private readonly string $className,
        private readonly string $namespace,
        private readonly array $discriminants = [],
        private readonly array $subNamespace = [],
    ) {
        parent::__construct($object, 'object');
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        $denormalizerVar = new Expr\PropertyFetch(new Expr\Variable('this'), 'denormalizer');
        if (!$normalizerFromObject) {
            $denormalizerVar = new Expr\Variable('denormalizer');
        }

        return new Expr\MethodCall($denormalizerVar, 'denormalize', [
            new Arg($input),
            new Arg(new ClassConstFetch(
                new FullyQualified($this->getFqdn(false)),
                new Identifier('class')
            )),
            new Arg(new Scalar\String_('json')),
            new Arg(new Expr\Variable('context')),
        ]);
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        $normalizerVar = new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizer');
        if (!$normalizerFromObject) {
            $normalizerVar = new Expr\Variable('normalizer');
        }

        return new Expr\Ternary(
            new Expr\BinaryOp\Identical($input, new Expr\ConstFetch(new Name('null'))),
            new Expr\ConstFetch(new Name('null')),
            new Expr\New_(new FullyQualified(\sprintf('%s\\Runtime\\JsonObject', $context->getCurrentSchema()->getNamespace())), [
                new Arg(new Expr\MethodCall($normalizerVar, 'normalize', [
                    new Arg($input),
                    new Arg(new Scalar\String_('json')),
                    new Arg(new Expr\Variable('context')),
                ])),
            ], [])
        );
    }

    public function createConditionStatement(Expr $input): Expr
    {
        $conditionStatement = parent::createConditionStatement($input);

        foreach ($this->discriminants as $key => $values) {
            $existsCondition = new Expr\FuncCall(
                new Name('\array_key_exists'),
                [
                    new Arg(new Scalar\String_($key)),
                    new Arg($input),
                ]
            );

            $logicalOr = null;

            if (null !== $values) {
                foreach ($values as $value) {
                    if (null === $logicalOr) {
                        $logicalOr = new Expr\BinaryOp\Equal(
                            new Expr\ArrayDimFetch($input, new Scalar\String_($key)),
                            new Scalar\String_($value)
                        );
                    } else {
                        $logicalOr = new Expr\BinaryOp\LogicalOr(
                            $logicalOr,
                            new Expr\BinaryOp\Equal(
                                new Expr\ArrayDimFetch($input, new Scalar\String_($key)),
                                new Scalar\String_($value)
                            )
                        );
                    }
                }
            }

            if (null !== $logicalOr) {
                $conditionStatement = new Expr\BinaryOp\LogicalAnd($conditionStatement, new Expr\BinaryOp\LogicalAnd($existsCondition, $logicalOr));
            } else {
                $conditionStatement = new Expr\BinaryOp\LogicalAnd($conditionStatement, $existsCondition);
            }
        }

        return $conditionStatement;
    }

    public function getTypeHint(string $namespace): Name
    {
        if ('\\' . $namespace . '\\' . $this->className === $this->getFqdn()) {
            return new Name($this->className);
        }

        return new Name($this->getFqdn());
    }

    public function getDocTypeHint(string $namespace): Name
    {
        return $this->getTypeHint($namespace);
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @return string[]
     */
    public function getSubNamespace(): array
    {
        return $this->subNamespace;
    }

    public function getFqdn(bool $withRoot = true): string
    {
        if ($withRoot) {
            return '\\' . $this->getFqdn(false);
        }

        return $this->namespace . '\\Model' . $this->getSubNamespaceSuffix() . '\\' . $this->className;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @return string "\"-prefixed sub-namespace (e.g. "\Users"), empty string when the model uses the flat layout
     */
    private function getSubNamespaceSuffix(): string
    {
        return [] === $this->subNamespace ? '' : '\\' . implode('\\', $this->subNamespace);
    }
}
