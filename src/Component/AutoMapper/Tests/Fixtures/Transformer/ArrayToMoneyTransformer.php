<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use Jane\Component\AutoMapper\Transformer\TransformerInterface;
use Money\Currency;
use Money\Money;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar\String_;

/**
 * Transform an array to Money\Money object.
 *
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
final class ArrayToMoneyTransformer implements TransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        return [new Expr\New_(new Name\FullyQualified(Money::class), [
            new Arg(new Expr\ArrayDimFetch($input, new String_('amount'))),
            new Arg(new Expr\New_(new Name\FullyQualified(Currency::class), [
                new Arg(new Expr\ArrayDimFetch($input, new String_('currency'))),
            ])),
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
