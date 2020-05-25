<?php

namespace Jane\AutoMapper\Transformer;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Generator\UniqueVariableScope;

/**
 * Handle custom callback transformation.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class CallbackTransformer implements TransformerInterface
{
    private $callbackName;

    public function __construct(string $callbackName)
    {
        $this->callbackName = $callbackName;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        /*
         * $output = $this->callbacks[$callbackName]($input);
         */
        return [new Expr\FuncCall(
            new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'callbacks'), new Scalar\String_($this->callbackName)), [
                new Arg($input),
            ]),
            [],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function assignByRef(): bool
    {
        return false;
    }
}
