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

/**
 * Transform a Money\Money object to a new Money\Money object.
 *
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
final class MoneyToMoneyTransformer implements TransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        return [
            new Expr\New_(new Name\FullyQualified(Money::class), [
                new Arg(new Expr\MethodCall($input, 'getAmount')),
                new Arg(new Expr\New_(new Name\FullyQualified(Currency::class), [
                    new Arg(new Expr\MethodCall(new Expr\MethodCall($input, 'getCurrency'), 'getCode')),
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
