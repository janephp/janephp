<?php

namespace Jane\Component\OpenApi31\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class DefaultBodyContentGenerator extends AbstractBodyContentGenerator
{
    public function getSerializeStatements(MediaType $content, string $contentType, string $reference, Context $context): array
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
