<?php

namespace Jane\Component\OpenApi3\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Generator\RequestBodyContent\JsonBodyContentGenerator;
use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApi3\JsonSchema\Model\Response;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApi3\JsonSchema\Normalizer\ResponseNormalizer;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\SerializerInterface;

trait GetTransformResponseBodyTrait
{
    public function getTransformResponseBody(OperationGuess $operation, string $endpointName, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator, Context $context): array
    {
        $outputStatements = [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('status'), new Expr\MethodCall(new Expr\Variable('response'), 'getStatusCode'))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('body'), new Expr\Cast\String_(new Expr\MethodCall(new Expr\Variable('response'), 'getBody')))),
        ];
        $outputTypes = $context->getRegistry()->getThrowUnexpectedStatusCode() ? [] : ['null'];
        $throwTypes = [];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $status => $response) {
                $reference = $operation->getReference() . '/responses/' . $status;

                if ($response instanceof Reference) {
                    [$reference, $response] = $guessClass->resolve($response, Response::class);
                }
                if (\is_array($response)) {
                    $normalizer = new ResponseNormalizer();
                    $normalizer->setDenormalizer($this->denormalizer);
                    $response = $normalizer->denormalize($response, Response::class);
                }

                /* @var Response $response */
                [$newOutputTypes, $newThrowTypes, $ifStatements] = $this->createResponseDenormalizationStatement(
                    $endpointName,
                    $status,
                    $response,
                    $context,
                    $reference,
                    $response->getDescription() ?? '',
                    $guessClass,
                    $exceptionGenerator
                );

                $outputTypes = array_merge($outputTypes, $newOutputTypes);
                $throwTypes = array_merge($throwTypes, $newThrowTypes);
                $outputStatements = array_merge($outputStatements, $ifStatements);
            }

            if ($operation->getOperation()->getResponses()->getDefault()) {
                $response = $operation->getOperation()->getResponses()->getDefault();
                $reference = $operation->getReference() . '/responses/default';

                if ($response instanceof Reference) {
                    [$reference, $response] = $guessClass->resolve($response, Response::class);
                }

                /* @var Response $response */
                [$newOutputTypes, $newThrowTypes, $ifStatements] = $this->createResponseDenormalizationStatement(
                    $endpointName,
                    'default',
                    $response,
                    $context,
                    $reference,
                    $response->getDescription(),
                    $guessClass,
                    $exceptionGenerator
                );

                $outputTypes = array_merge($outputTypes, $newOutputTypes);
                $throwTypes = array_merge($throwTypes, $newThrowTypes);
                $outputStatements = array_merge($outputStatements, $ifStatements);
            }

            $outputTypes = array_unique($outputTypes);
            $throwTypes = array_unique($throwTypes);
        }

        if ($context->getRegistry()->getThrowUnexpectedStatusCode()) {
            $exceptionGenerator->createBaseExceptions($context);

            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\UnexpectedStatusCodeException';
            $throwTypes[] = $throwType;
            $outputStatements = array_merge(
                $outputStatements,
                [
                    new Stmt\Throw_(
                        new Expr\New_(
                            new Name($throwType),
                            [
                                new Node\Arg(new Expr\Variable('status')),
                                new Node\Arg(new Expr\Variable('body')),
                            ]
                        )
                    ),
                ]
            );
        }

        $returnDoc = implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $outputTypes);

        return [new Stmt\ClassMethod('transformResponseBody', [
            'type' => Stmt\Class_::MODIFIER_PROTECTED,
            'params' => [
                new Node\Param(new Expr\Variable('response'), null, new Name('\\Psr\\Http\\Message\\ResponseInterface')),
                new Node\Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Node\Param(new Expr\Variable('contentType'), new Expr\ConstFetch(new Name('null')), new Node\NullableType(new Name('string'))),
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

    private function createResponseDenormalizationStatement(string $name, string $status, Response $response, Context $context, string $reference, string $description, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator): array
    {
        // No content response
        if (!$response->getContent()) {
            [$returnType, $throwType, $returnStatement] = $this->createContentDenormalizationStatement(
                $name,
                $status,
                null,
                $context,
                $reference,
                $description,
                $guessClass,
                $exceptionGenerator
            );

            $returnTypes = $returnType === null ? [] : [$returnType];
            $throwTypes = $throwType === null ? [] : [$throwType];

            if ('default' === $status) {
                return [$returnTypes, $throwTypes, [$returnStatement]];
            }

            return [$returnTypes, $throwTypes, [new Stmt\If_(
                new Expr\BinaryOp\Identical(
                    new Scalar\LNumber((int) $status),
                    new Expr\Variable('status')
                ),
                [
                    'stmts' => [$returnStatement],
                ]
            )]];
        }

        $returnTypes = [];
        $throwTypes = [];
        $statements = [];

        foreach ($response->getContent() as $contentType => $content) {
            if (\in_array($contentType, JsonBodyContentGenerator::JSON_TYPES)) {
                [$returnType, $throwType, $returnStatement] = $this->createContentDenormalizationStatement(
                    $name,
                    $status,
                    $content->getSchema(),
                    $context,
                    $reference . '/content/' . $contentType . '/schema',
                    $description,
                    $guessClass,
                    $exceptionGenerator
                );

                if ($returnType !== null) {
                    $returnTypes[] = $returnType;
                }

                if ($throwType !== null) {
                    $throwTypes[] = $throwType;
                }

                $statements[] = new Stmt\If_(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\FuncCall(new Name('mb_strpos'), [
                            new Node\Arg(new Expr\Variable('contentType')),
                            new Node\Arg(new Scalar\String_($contentType)),
                        ]),
                        new Expr\ConstFetch(new Name('false'))
                    ),
                    [
                        'stmts' => [$returnStatement],
                    ]
                );
            }
        }

        if ('default' === $status) {
            return [$returnTypes, $throwTypes, $statements];
        }

        // Avoid useless imbrication of ifs
        if (\count($statements) === 1 && $statements[0] instanceof Stmt\If_) {
            return [$returnTypes, $throwTypes, [new Stmt\If_(
                new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\Identical(
                        new Expr\FuncCall(new Name('is_null'), [
                            new Node\Arg(new Expr\Variable('contentType')),
                        ]),
                        new Expr\ConstFetch(new Name('false'))
                    ),
                    new Expr\BinaryOp\BooleanAnd(
                        new Expr\BinaryOp\Identical(
                            new Scalar\LNumber((int) $status),
                            new Expr\Variable('status')
                        ),
                        $statements[0]->cond
                    )
                ),
                [
                    'stmts' => $statements[0]->stmts,
                ]
            )]];
        }

        return [$returnTypes, $throwTypes, [new Stmt\If_(
            new Expr\BinaryOp\Identical(
                new Scalar\LNumber((int) $status),
                new Expr\Variable('status')
            ),
            [
                'stmts' => $statements,
            ]
        )]];
    }

    private function createContentDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator): array
    {
        $classGuess = $guessClass->guessClass($schema, $reference, $context->getRegistry(), $array);
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
                    new Node\Arg(new Expr\Variable('body')),
                    new Node\Arg(new Scalar\String_($class)),
                    new Node\Arg(new Scalar\String_('json')),
                ]
            );
        } elseif ($schema instanceof Schema) {
            $serializeStmt = new Expr\FuncCall(new Name('json_decode'), [
                new Node\Arg(new Expr\Variable('body')),
            ]);
        }

        $contentStatement = new Stmt\Return_($serializeStmt);

        if ((int) $status >= 400) {
            $exceptionName = $exceptionGenerator->generate(
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
            $contentStatement = new Stmt\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [
                new Node\Arg($serializeStmt), new Node\Arg(new Expr\Variable('response')),
            ] : [new Node\Arg(new Expr\Variable('response'))]));
        }

        return [$returnType, $throwType, $contentStatement];
    }
}
