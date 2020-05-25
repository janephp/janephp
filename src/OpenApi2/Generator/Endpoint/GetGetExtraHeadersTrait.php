<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\OpenApi2\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Name;

trait GetGetExtraHeadersTrait
{
    public function getExtraHeadersMethod(OpenApi $openApi, OperationGuess $operation): ?Stmt\ClassMethod
    {
        $headers = [];
        $produces = array_merge(
            $openApi->getProduces() ?? [],
            $operation->getOperation()->getProduces() ?? []
        );

        // It's a server side specification, what it produces is what we potentially can accept
        if (\in_array('application/json', $produces, true)) {
            $headers[] = new Expr\ArrayItem(
                new Expr\Array_(
                    [
                        new Expr\ArrayItem(
                            new Scalar\String_('application/json')
                        ),
                    ]
                ),
                new Scalar\String_('Accept')
            );
        }

        if (\count($headers) === 0) {
            return null;
        }

        return new Stmt\ClassMethod('getExtraHeaders', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [
                new Stmt\Return_(new Expr\Array_($headers)),
            ],
            'returnType' => new Name('array'),
        ]);
    }
}
