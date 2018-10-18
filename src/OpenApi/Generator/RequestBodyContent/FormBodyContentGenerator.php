<?php

namespace Jane\OpenApi\Generator\RequestBodyContent;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Generator\RequestBodyContentGeneratorInterface;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class FormBodyContentGenerator extends AbstractBodyContentGenerator
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
        if (preg_match('/multipart\/form-data/', $contentType)) {
            /**
            $bodyBuilder = new MultipartStreamBuilder($streamFactory);
            $formParameters = $this->getFormOptionsResolver()->resolve($this->formParameters);

            foreach ($formParameters as $key => $value) {
            $bodyBuilder->addResource($key, $value);
            }

            return [
            ['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]],
            $bodyBuilder->build(),
            ];
             */
            return [
                new Expr\Assign(new Expr\Variable('bodyBuilder'), new Expr\New_(new Name('\\'. MultipartStreamBuilder::class), [
                    new Arg(new Expr\Variable('streamFactory'))
                ])),
                new Expr\Assign(new Expr\Variable('formParameters'), new Expr\MethodCall(new Expr\Variable('serializer'), 'normalize', [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                    new Arg(new Scalar\String_('json'))
                ])),
                new Stmt\Foreach_(new Expr\Variable('formParameters'), new Expr\Variable('value'), [
                    'keyVar' => new Expr\Variable('key'),
                    'stmts' => [
                        new Expr\MethodCall(new Expr\Variable('bodyBuilder'), 'addResource', [
                            new Arg(new Expr\Variable('key')),
                            new Arg(new Expr\Variable('value')),
                        ])
                    ]
                ]),
                new Stmt\Return_(new Expr\Array_([
                    new Expr\Array_([
                        new Expr\ArrayItem(
                            new Expr\Array_([new Expr\ArrayItem(
                                new Expr\BinaryOp\Concat(
                                    new Scalar\String_('multipart/form-data; boundary="'),
                                    new Expr\BinaryOp\Concat(
                                        new Expr\MethodCall(new Expr\Variable('bodyBuilder'), 'getBoundary'),
                                        new Scalar\String_('""')
                                    )
                                )
                            )]),
                            new Scalar\String_('Content-Type')
                        )
                    ]),
                    new Expr\MethodCall(new Expr\Variable('bodyBuilder'), 'build'),
                ]))
            ];
        }

        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                )
            ]),
            new Expr\FuncCall(new Name('http_build_query'), [
                new Arg(new Expr\MethodCall(
                    new Expr\Variable('serializer'),
                    new Name('normalize'),
                    [
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                        new Arg(new Scalar\String_('json')),
                    ]
                ))
            ]),
        ]))];
    }
}
