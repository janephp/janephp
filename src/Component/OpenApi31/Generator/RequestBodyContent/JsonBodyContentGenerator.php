<?php

namespace Jane\Component\OpenApi31\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class JsonBodyContentGenerator extends AbstractBodyContentGenerator
{
    public const JSON_TYPES = [
        'application/json',
        'application/merge-patch+json',
        'application/ld+json',
        'application/hal+json',
        'application/vnd.api+json',
        'application/problem+json',
    ];

    public function getSerializeStatements(MediaType $content, string $contentType, string $reference, Context $context): array
    {
        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                ),
            ]),
            new Expr\MethodCall(
                new Expr\Variable('serializer'),
                'serialize',
                [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                    new Arg(new Scalar\String_('json')),
                ]
            ),
        ]))];
    }
}
