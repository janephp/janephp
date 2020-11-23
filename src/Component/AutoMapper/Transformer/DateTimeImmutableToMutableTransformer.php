<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar\String_;

/**
 * Transform DateTimeImmutable to DateTime.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class DateTimeImmutableToMutableTransformer implements TransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        return [
            new Expr\StaticCall(new Name\FullyQualified(\DateTime::class), 'createFromFormat', [
                new Arg(new String_(\DateTime::RFC3339)),
                new Arg(new Expr\MethodCall($input, 'format', [
                    new Arg(new String_(\DateTime::RFC3339)),
                ])),
            ]),
            [],
        ];
    }
}
