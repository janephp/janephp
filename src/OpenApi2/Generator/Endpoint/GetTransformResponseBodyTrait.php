<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Guesser\GuessClass;
use Jane\OpenApi2\JsonSchema\Model\Response;
use Jane\OpenApi2\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\SerializerInterface;

trait GetTransformResponseBodyTrait
{
    public function getTransformResponseBody(OperationGuess $operation, string $endpointName, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator, Context $context): array
    {
        $outputStatements = [];
        $outputTypes = ['null'];
        $throwTypes = [];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $status => $response) {
                $reference = $operation->getReference() . '/responses/' . $status;

                if ($response instanceof Reference) {
                    [$reference, $response] = $guessClass->resolve($response, Response::class);
                }

                /* @var Response $response */
                [$outputType, $throwType, $ifStatus] = $this->createResponseDenormalizationStatement(
                    $endpointName,
                    $status,
                    $response->getSchema(),
                    $context,
                    $reference,
                    $response->getDescription()
                );

                if (null !== $outputType || null !== $throwType) {
                    if (null !== $outputType && !\in_array($outputType, $outputTypes, true)) {
                        $outputTypes[] = $outputType;
                    }

                    if (null !== $throwType && !\in_array($throwType, $throwTypes, true)) {
                        $throwTypes[] = $throwType;
                    }

                    $outputStatements[] = $ifStatus;
                }
            }
        }

        if ($context->getRegistry()->getThrowUnexpectedStatusCode()) {
            $exceptionGenerator->createBaseExceptions($context);

            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\UnexpectedStatusCodeException';
            $throwTypes[] = $throwType;
            $outputStatements = array_merge($outputStatements, [
                new Stmt\Throw_(new Expr\New_(new Name($throwType)), [new Arg(new Node\Expr\Variable('status'))]),
            ]);
        }

        $returnDoc = implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $outputTypes);

        return [new Stmt\ClassMethod('transformResponseBody', [
            'type' => Stmt\Class_::MODIFIER_PROTECTED,
            'params' => [
                new Node\Param(new Node\Expr\Variable('body'), null, new Name('string')),
                new Node\Param(new Node\Expr\Variable('status'), null, new Name('int')),
                new Node\Param(new Node\Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Node\Param(new Node\Expr\Variable('contentType'), null, new Node\NullableType(new Name('string'))),
            ],
            'stmts' => $outputStatements,
        ], [
            'comments' => [new Doc(<<<EOD
/**
 * {@inheritdoc}
 *

EOD
                . $returnDoc . "\n"
                . ' */'
            ),
            ], ]), $outputTypes, $throwTypes];
    }

    private function createResponseDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description)
    {
        $array = false;
        $classGuess = $this->guessClass->guessClass($schema, $reference, $context->getRegistry(), $array);
        $returnType = 'null';
        $throwType = null;
        $serializeStmt = new Expr\ConstFetch(new Name('null'));
        $class = null;

        if (null !== $classGuess) {
            $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model\\' . $classGuess->getName();

            if ($array) {
                $class .= '[]';
            }

            $returnType = '\\' . $class;
            $serializeStmt = new Expr\MethodCall(
                new Expr\Variable('serializer'),
                'deserialize',
                [
                    new Arg(new Expr\Variable('body')),
                    new Arg(new Scalar\String_($class)),
                    new Arg(new Scalar\String_('json')),
                ]
            );
        } elseif ($schema instanceof Schema) {
            $serializeStmt = new Expr\FuncCall(new Name('json_decode'), [
                new Arg(new Expr\Variable('body')),
            ]);
        }

        $returnStmt = new Stmt\Return_($serializeStmt);

        if ((int) $status >= 400) {
            $exceptionName = $this->exceptionGenerator->generate(
                $name,
                (int) $status,
                $context,
                $classGuess,
                $array,
                $class,
                $description
            );

            $returnType = null;
            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\' . $exceptionName;
            $returnStmt = new Stmt\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [
                $serializeStmt,
            ] : []));
        }

        if ('default' === $status) {
            return [$returnType, $throwType, $returnStmt];
        }

        return [$returnType, $throwType, new Stmt\If_(
            new Expr\BinaryOp\Identical(
                new Scalar\LNumber((int) $status),
                new Expr\Variable('status')
            ),
            [
                'stmts' => [$returnStmt],
            ]
        )];
    }
}
