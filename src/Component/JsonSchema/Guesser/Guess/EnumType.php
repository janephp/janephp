<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Scalar;

class EnumType extends Type
{
    public function __construct(
        object $object,
        private readonly string $className,
        private readonly string $namespace,
        private readonly string $backingType,
    ) {
        parent::__construct($object, $backingType);
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return new Expr\StaticCall(
            new FullyQualified($this->getFqdn(false)),
            'from',
            [new Arg($input)]
        );
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return new Expr\PropertyFetch($input, 'value');
    }

    public function createConditionStatement(Expr $input): Expr
    {
        return new Expr\FuncCall(
            new Name($this->conditionMapping[$this->name]),
            [new Arg($input)]
        );
    }

    public function createNormalizationConditionStatement(Expr $input): Expr
    {
        return new Expr\Instanceof_(
            $input,
            new FullyQualified($this->getFqdn(false))
        );
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

    private function getFqdn(bool $withRoot = true): string
    {
        if ($withRoot) {
            return '\\' . $this->namespace . '\\Model\\' . $this->className;
        }

        return $this->namespace . '\\Model\\' . $this->className;
    }
}
