<?php

namespace Jane\OpenApi\Generator\RequestBodyContent;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class DefaultBodyContentGenerator extends AbstractBodyContentGenerator
{
    /**
     * {@inheritdoc}
     */
    public function getTypes($content): array
    {
        // TODO: Implement getType() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getSerializeStatements($content, $contentType, $reference, Context $context)
    {
        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                ),
            ]),
            new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
        ]))];
    }
}
