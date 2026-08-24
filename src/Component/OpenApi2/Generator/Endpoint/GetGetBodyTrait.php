<?php

namespace Jane\Component\OpenApi2\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Modifiers;
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
        $hasBody = $isSerializableBody = $isFormBody = $hasFileInForm = false;
        $isObjectBody = false;
        $consumes = \is_array($operation->getOperation()->getConsumes()) ? $operation->getOperation()->getConsumes() : [$operation->getOperation()->getConsumes()];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof BodyParameter && $parameter->getSchema() !== null) {
                $hasBody = true;

                $schema = $parameter->getSchema();
                $array = false;
                $classGuess = $this->guessClass->guessClass($schema, $operation->getReference() . '/parameters/' . $key, $context->getRegistry(), $array);

                if (\in_array('application/json', $consumes, true)) {
                    $isSerializableBody = true;
                }

                if (null !== $classGuess) {
                    $isSerializableBody = true;
                    // A named-object payload normalized to an empty PHP array must be sent as a JSON object
                    // ('{}'), not as an empty JSON array ('[]') (@see https://github.com/janephp/janephp/issues/680).
                    $isObjectBody = !$array;
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
            'flags' => Modifiers::PUBLIC,
            'params' => [
                new Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Param(new Expr\Variable('streamFactory'), new Expr\ConstFetch(new Name('null'))),
            ],
            'returnType' => new Name('array'),
        ]);

        if ($isSerializableBody) {
            $method->stmts = [
                new Stmt\Return_(new Expr\MethodCall(
                    new Expr\Variable('this'),
                    $isObjectBody ? 'getSerializedObjectBody' : 'getSerializedBody',
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
