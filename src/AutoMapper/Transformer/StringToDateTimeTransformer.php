<?php

namespace Jane\AutoMapper\Transformer;

use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar\String_;

/**
 * Transform a string to a \DateTimeInterface object.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class StringToDateTimeTransformer implements TransformerInterface
{
    private $className;

    private $format;

    public function __construct(string $className, string $format = \DateTimeInterface::RFC3339)
    {
        $this->className = $className;
        $this->format = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        return [new Expr\StaticCall(new Name\FullyQualified($this->className), 'createFromFormat', [
            new Arg(new String_($this->format)),
            new Arg($input),
        ]), []];
    }

    /**
     * {@inheritdoc}
     */
    public function assignByRef(): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [];
    }
}
