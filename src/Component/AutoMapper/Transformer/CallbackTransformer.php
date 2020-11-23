<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

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
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        /*
         * $output = $this->callbacks[$callbackName]($input);
         */

        $arguments = [
            new Arg($input),
        ];
        if ($target instanceof Expr) {
            $arguments[] = new Arg($target);
        }

        return [new Expr\FuncCall(
            new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'callbacks'), new Scalar\String_($this->callbackName)), $arguments),
            [],
        ];
    }
}
