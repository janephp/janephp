<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\SerializerInterface;

trait GetGetBodyTrait
{
    public function getGetBody(OperationGuess $operation, Context $context): Stmt\ClassMethod
    {
        $hasBody = false;
        $isSerializableBody = false;
        $isFormBody = false;
        $hasFileInForm = false;
        $consumes = \is_array($operation->getOperation()->getConsumes()) ? $operation->getOperation()->getConsumes() : [$operation->getOperation()->getConsumes()];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof BodyParameter && $parameter->getSchema() !== null) {
                $hasBody = true;

                $schema = $parameter->getSchema();
                $classGuess = $this->guessClass->guessClass($schema, $operation->getReference() . '/parameters/' . $key, $context->getRegistry());

                if (\in_array('application/json', $consumes, true)) {
                    $isSerializableBody = true;
                }

                if (null !== $classGuess) {
                    $isSerializableBody = true;
                }
            }

            if ($parameter instanceof FormDataParameterSubSchema) {
                $isFormBody = true;

                if ($parameter->getType() === 'file') {
                    $hasFileInForm = true;
                }
            }
        }

        $method = new Stmt\ClassMethod('getBody', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Node\Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Param(new Node\Expr\Variable('streamFactory'), new Expr\ConstFetch(new Name('null'))),
            ],
            'returnType' => new Name('array'),
        ]);

        if ($isSerializableBody) {
            $method->stmts = [
                new Stmt\Return_(new Expr\MethodCall(
                    new Expr\Variable('this'),
                    'getSerializedBody',
                    [
                        new Arg(new Expr\Variable('serializer')),
                    ]
                )),
            ];

            return $method;
        }

        if ($isFormBody && $hasFileInForm) {
            $method->stmts = [
                new Stmt\Return_(new Expr\MethodCall(
                    new Expr\Variable('this'),
                    'getMultipartBody',
                    [
                        new Arg(new Expr\Variable('streamFactory')),
                    ]
                )),
            ];

            return $method;
        }

        if ($isFormBody) {
            $method->stmts = [
                new Stmt\Return_(new Expr\MethodCall(
                    new Expr\Variable('this'),
                    'getFormBody'
                )),
            ];

            return $method;
        }

        if ($hasBody) {
            $method->stmts = [
                new Stmt\Return_(new Expr\Array_([
                    new Expr\Array_(),
                    new Expr\PropertyFetch(
                        new Expr\Variable('this'),
                        'body'
                    ),
                ])),
            ];

            return $method;
        }

        $method->stmts = [
            new Stmt\Return_(new Expr\Array_([
                new Expr\Array_(),
                new Expr\ConstFetch(new Name('null')),
            ])),
        ];

        return $method;
    }
}
