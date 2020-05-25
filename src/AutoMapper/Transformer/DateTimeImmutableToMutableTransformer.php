<?php

namespace Jane\AutoMapper\Transformer;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar\String_;
use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Generator\UniqueVariableScope;

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
    public function transform(Expr $input, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
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
