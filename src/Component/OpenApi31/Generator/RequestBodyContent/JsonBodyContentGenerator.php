<?php

namespace Jane\Component\OpenApi31\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
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
        $bodyExpr = new Expr\PropertyFetch(new Expr\Variable('this'), 'body');
        $serializeExpr = new Expr\MethodCall(
            new Expr\Variable('serializer'),
            'serialize',
            [
                new Arg($bodyExpr),
                new Arg(new Scalar\String_('json')),
            ]
        );

        $array = false;
        $schema = $content->getSchema();
        $classGuess = $this->guessClass->guessClass($schema, $reference . '/schema', $context->getRegistry(), $array);

        // A named-object payload normalized to an empty PHP array must be sent as a JSON object ('{}'),
        // not as an empty JSON array ('[]') (@see https://github.com/janephp/janephp/issues/680).
        if (null !== $classGuess && !$array) {
            $serializeExpr = new Expr\StaticCall(
                new Name\FullyQualified(\sprintf('%s\\Runtime\\Client\\JsonPayload', $context->getCurrentSchema()->getNamespace())),
                'encode',
                [
                    new Arg(new Expr\Variable('serializer')),
                    new Arg($bodyExpr),
                ]
            );
        }

        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                ),
            ]),
            $serializeExpr,
        ]))];
    }
}
