<?php

namespace Jane\Component\OpenApi3\Generator\Endpoint;

use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetExtraHeadersTrait
{
    public function getExtraHeadersMethod(OperationGuess $operation, GuessClass $guessClass): ?Stmt\ClassMethod
    {
        $headers = [];
        $produces = $this->getContentTypes($operation, $guessClass);

        if (\count($produces) === 0) {
            return null;
        }

        // Add all content types except text/html as default Accept content types.
        $items = [];
        foreach ($produces as $contentType) {
            if ($contentType === 'text/html') {
                continue;
            }
            $items[] = new Expr\ArrayItem(new Scalar\String_($contentType));
        }
        $headers[] = new Expr\ArrayItem(
            new Expr\Array_($items),
            new Scalar\String_('Accept')
        );

        if (\count($items) === 1) {
            return new Stmt\ClassMethod('getExtraHeaders', [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [new Stmt\Return_(new Expr\Array_($headers))],
                'returnType' => new Name('array'),
            ]);
        }

        $returnDefault = new Stmt\If_(
            new Expr\FuncCall(new Name('empty'), [
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'accept')),
            ]),
            [
                'stmts' => [
                    new Stmt\Return_(new Expr\Array_($headers)),
                ],
            ]
        );

        $returnAccept = new Stmt\Return_(new Expr\PropertyFetch(new Expr\Variable('this'), 'accept'));

        return new Stmt\ClassMethod('getExtraHeaders', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [$returnDefault, $returnAccept],
            'returnType' => new Name('array'),
        ]);
    }
}
