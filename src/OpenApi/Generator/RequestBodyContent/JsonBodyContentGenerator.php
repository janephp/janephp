<?php

namespace Jane\OpenApi\Generator\RequestBodyContent;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Model\MediaType;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class JsonBodyContentGenerator extends AbstractBodyContentGenerator
{
    /**
     * {@inheritdoc}
     */
    public function getSerializeStatements(MediaType $content, string $contentType, string $reference, Context $context): array
    {
        [$classGuess, $array, $schema] = $this->guessClass($content->getSchema(), $reference . '/schema', $context);

        if (null === $classGuess) {
            return [new Stmt\Return_(new Expr\Array_([
                new Expr\Array_([
                    new Expr\ArrayItem(
                        new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                        new Scalar\String_('Content-Type')
                    ),
                ]),
                new Expr\FuncCall(new Name('json_encode'), [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                ]),
            ]))];
        }

        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                ),
            ]),
            new Expr\MethodCall(
                new Expr\Variable('serializer'),
                new Name('serialize'),
                [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                    new Arg(new Scalar\String_('json')),
                ]
            ),
        ]))];
    }
}
