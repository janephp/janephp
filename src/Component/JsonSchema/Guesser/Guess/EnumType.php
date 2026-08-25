<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;

class EnumType extends Type
{
    /**
     * @param string[] $subNamespace Sub-namespace segments of the enum inside "Model"
     */
    public function __construct(
        ?object $object,
        string $backingType,
        private readonly string $className,
        private readonly string $namespace,
        private readonly array $subNamespace = [],
    ) {
        parent::__construct($object, $backingType);
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    protected function createDenormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return new Expr\StaticCall(
            new FullyQualified($this->getFqdn(false)),
            'from',
            [
                new Arg($input),
            ]
        );
    }

    protected function createNormalizationValueStatement(Context $context, Expr $input, bool $normalizerFromObject = true): Expr
    {
        return new Expr\PropertyFetch($input, 'value');
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

    private function getFqdn(bool $withRoot = true): string
    {
        $subNamespaceSuffix = [] === $this->subNamespace ? '' : '\\' . implode('\\', $this->subNamespace);

        if ($withRoot) {
            return '\\' . $this->namespace . '\\Model' . $subNamespaceSuffix . '\\' . $this->className;
        }

        return $this->namespace . '\\Model' . $subNamespaceSuffix . '\\' . $this->className;
    }
}
