<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use Jane\Component\AutoMapper\Transformer\TransformerInterface;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Expression;

/**
 * Transform a Money\Money object to an array.
 *
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
final class MoneyToArrayTransformer implements TransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        $moneyVar = new Expr\Variable($uniqueVariableScope->getUniqueName('money'));

        return [$moneyVar, [
            new Expression(new Expr\Assign(new Expr\ArrayDimFetch($moneyVar, new String_('amount')), new Expr\MethodCall($input, 'getAmount'))),
            new Expression(new Expr\Assign(new Expr\ArrayDimFetch($moneyVar, new String_('currency')), new Expr\MethodCall(new Expr\MethodCall($input, 'getCurrency'), 'getCode'))),
        ]];
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
