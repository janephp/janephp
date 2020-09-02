<?php

namespace Jane\AutoMapper\Transformer;

use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar\String_;

/**
 * Transform a \DateTimeInterface object to a string.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class DateTimeToStringTransformer implements TransformerInterface
{
    private $format;

    public function __construct(string $format = \DateTimeInterface::RFC3339)
    {
        $this->format = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        return [new Expr\MethodCall($input, 'format', [
            new Arg(new String_($this->format)),
        ]), []];
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
