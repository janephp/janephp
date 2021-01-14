<?php

namespace Jane\Component\OpenApi3\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
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
        $outputStatements = [];
        $outputTypes = ['null'];
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
            $outputStatements = array_merge($outputStatements, [
                new Stmt\Throw_(new Expr\New_(new Name($throwType), [new Node\Arg(new Node\Expr\Variable('status'))])),
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
                new Node\Param(new Expr\Variable('body'), null, new Name('string')),
                new Node\Param(new Expr\Variable('status'), null, new Name('int')),
                new Node\Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Node\Param(new Node\Expr\Variable('contentType'), new Expr\ConstFetch(new Name('null')), new Node\NullableType(new Name('string'))),
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
            [$returnType, $throwType, $returnStatements] = $this->createContentDenormalizationStatement(
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
                return [$returnTypes, $throwTypes, $returnStatements];
            }

            return [$returnTypes, $throwTypes, [new Stmt\If_(
                new Expr\BinaryOp\Identical(
                    new Scalar\LNumber((int) $status),
                    new Expr\Variable('status')
                ),
                [
                    'stmts' => $returnStatements,
                ]
            )]];
        }

        $returnTypes = [];
        $throwTypes = [];
        $statements = [];

        foreach ($response->getContent() as $contentType => $content) {
            if ($contentType === 'application/json') {
                [$returnType, $throwType, $returnStatements] = $this->createContentDenormalizationStatement(
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
                        'stmts' => $returnStatements,
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
        $class = null;
        $serializeStmt = new Expr\ConstFetch(new Name('null'));
        $contentStatements = [new Stmt\Return_($serializeStmt)];

        if (null !== $classGuess) {
            $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model\\' . $classGuess->getName();

            if ($array) {
                $class .= '[]';
            }

            list($returnType, $serializeStmt, $contentStatements) = $this->generateSingleResponseContent($class);
        } elseif ($schema instanceof Schema && null !== $schema->getDiscriminator()) {
            list($returnType, $contentStatements) = $this->generateMultipleResponseContent($schema, $context);
        } elseif ($schema instanceof Schema) {
            list($returnType, $contentStatements) = $this->generateDefaultResponseContent();
        }

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
            $contentStatements = [new Stmt\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [$serializeStmt] : []))];
        }

        return [$returnType, $throwType, $contentStatements];
    }

    private function generateSingleResponseContent(string $class): array
    {
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

        return [$returnType, $serializeStmt, [new Stmt\Return_($serializeStmt)]];
    }

    private function generateMultipleResponseContent(Schema $schema, Context $context): array
    {
        // Fallback to default response content if oneOf is not used
        if (null === $schema->getOneOf()) {
            return $this->generateDefaultResponseContent();
        }

        $returnType = '';
        $statements = [];

        $decodeStmt = new Expr\Assign(
            new Expr\Variable('decoded'),
            new Expr\MethodCall(
                new Expr\Variable('serializer'),
                'decode',
                [
                    new Node\Arg(new Expr\Variable('body')),
                    new Node\Arg(new Scalar\String_('json')),
                ]
            )
        );

        $statements[] = new Stmt\Expression($decodeStmt);

        foreach ($schema->getOneOf() as $objectReference) {
            $statements[] = $this->generateObjectDenormalizeStatement($objectReference, $context, $schema, $returnType);
        }

        return [$returnType, $statements];
    }

    private function generateObjectDenormalizeStatement(Reference $objectReference, Context $context, Schema $schema, string &$returnType): Stmt
    {
        $classGuess = $context->getRegistry()->getClass((string) $objectReference->getMergedUri());
        $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model\\' . $classGuess->getName();

        $returnType .= '' === $returnType ? '\\' . $class : '|\\' . $class;

        $propertyValue = $classGuess->getName();

        if ($schema->getDiscriminator()->getMapping()) {
            $mapping = array_flip((array) $schema->getDiscriminator()->getMapping());
            $propertyValue = $mapping[(string) $objectReference->getReferenceUri()];
        }

        return new Stmt\If_(
            new Expr\BinaryOp\BooleanAnd(
                new Expr\Isset_([
                    new Expr\ArrayDimFetch(
                        new Expr\Variable('decoded'),
                        new Scalar\String_($schema->getDiscriminator()->getPropertyName())
                    ),
                ]),
                new Expr\BinaryOp\Identical(
                    new Expr\ArrayDimFetch(new Expr\Variable('decoded'), new Scalar\String_($schema->getDiscriminator()->getPropertyName())),
                    new Scalar\String_($propertyValue)
                )
            ),
            [
                'stmts' => [
                    new Stmt\Return_(new Expr\MethodCall(
                        new Expr\Variable('serializer'),
                        'denormalize',
                        [
                            new Node\Arg(new Expr\Variable('decoded')),
                            new Node\Arg(new Scalar\String_($class)),
                        ]
                    )),
                ],
            ]
        );
    }

    private function generateDefaultResponseContent(): array
    {
        $serializeStmt = new Expr\FuncCall(new Name('json_decode'), [
            new Node\Arg(new Expr\Variable('body')),
        ]);

        return [null, [new Stmt\Return_($serializeStmt)]];
    }
}
