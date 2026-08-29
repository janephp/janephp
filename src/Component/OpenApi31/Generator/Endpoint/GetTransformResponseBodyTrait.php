<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Generator\RequestBodyContent\JsonBodyContentGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Response;
use Jane\Component\OpenApi31\JsonSchema\Normalizer\ResponseNormalizer;
use Jane\Component\OpenApiCommon\Generator\ContentType;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Generator\Traits\OpenApiNumberTypeResolverTrait;
use Jane\Component\OpenApiCommon\Generator\Traits\StatusCodeRangeTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\XNamespaceResolver;
use Jane\Component\OpenApiCommon\Registry\Registry;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\SerializerInterface;

trait GetTransformResponseBodyTrait
{
    use OpenApiNumberTypeResolverTrait;
    use StatusCodeRangeTrait;

    public function getTransformResponseBody(OperationGuess $operation, string $endpointName, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator, Context $context): array
    {
        $outputStatements = [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('status'), new Expr\MethodCall(new Expr\Variable('response'), 'getStatusCode'))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('body'), new Expr\Cast\String_(new Expr\MethodCall(new Expr\Variable('response'), 'getBody')))),
        ];

        /** @var Registry $registry */
        $registry = $context->getRegistry();
        $outputTypes = $registry->getThrowUnexpectedStatusCode() ? [] : ['null'];
        $throwTypes = [];

        if ($operation->getOperation()->getResponses()) {
            $responses = $operation->getOperation()->getResponses();
            $statuses = array_keys(iterator_to_array($responses));
            usort($statuses, fn (int|string $a, int|string $b): int => (int) $this->isStatusCodeRange($a) <=> (int) $this->isStatusCodeRange($b));

            foreach ($statuses as $status) {
                $response = $responses[$status];
                $reference = $operation->getReference() . '/responses/' . $status;

                if ($response instanceof Reference) {
                    [$reference, $response] = $guessClass->resolve($response, Response::class);
                }
                if (\is_array($response)) {
                    $normalizer = new ResponseNormalizer();
                    $normalizer->setDenormalizer($this->denormalizer);
                    $response = $normalizer->denormalize(
                        $response,
                        Response::class,
                        'json',
                        ['document-origin' => $context->getCurrentSchema()->getOrigin()]
                    );

                    if ($response instanceof Reference) {
                        [$reference, $response] = $guessClass->resolve($response, Response::class);
                    }
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

                if (\is_array($response)) {
                    $normalizer = new ResponseNormalizer();
                    $normalizer->setDenormalizer($this->denormalizer);
                    $response = $normalizer->denormalize(
                        $response,
                        Response::class,
                        'json',
                        ['document-origin' => $context->getCurrentSchema()->getOrigin()]
                    );

                    if ($response instanceof Reference) {
                        [$reference, $response] = $guessClass->resolve($response, Response::class);
                    }
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

        if ($registry->getThrowUnexpectedStatusCode()) {
            $exceptionGenerator->createBaseExceptions($context);

            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\BadResponseException';
            $throwTypes[] = $throwType;
            $outputStatements = array_merge(
                $outputStatements,
                [
                    new Stmt\Expression(new Expr\Throw_(
                        new Expr\New_(
                            new Name($throwType),
                            [
                                new Node\Arg(new Expr\Variable('status')),
                                new Node\Arg(new Expr\Variable('body')),
                                new Node\Arg(new Expr\Variable('response')),
                            ]
                        )
                    )),
                ]
            );
        }

        $returnDoc = implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $outputTypes);

        return [new Stmt\ClassMethod('transformResponseBody', [
            'flags' => Modifiers::PROTECTED,
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
                $this->createStatusCondition($status),
                [
                    'stmts' => [$returnStatement],
                ]
            )]];
        }

        $returnTypes = [];
        $throwTypes = [];
        $statements = [];

        foreach ($response->getContent() as $contentType => $content) {
            $baseContentType = ContentType::withoutParameters($contentType);

            if (\in_array($baseContentType, JsonBodyContentGenerator::JSON_TYPES) || str_ends_with($baseContentType, '+json')) {
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
                        new Expr\FuncCall(new Name('stripos'), [
                            new Node\Arg(
                                new Expr\FuncCall(new Name('strtolower'), [
                                    new Expr\Variable('contentType'),
                                ]),
                            ),
                            new Node\Arg(new Scalar\String_($baseContentType)),
                        ]),
                        new Expr\ConstFetch(new Name('false'))
                    ),
                    [
                        'stmts' => [$returnStatement],
                    ]
                );
            } elseif ('application/x-www-form-urlencoded' === $baseContentType) {
                [$returnType, $throwType, $returnStatement] = $this->createContentDenormalizationStatement(
                    $name,
                    $status,
                    $content->getSchema(),
                    $context,
                    $reference . '/content/' . $contentType . '/schema',
                    $description,
                    $guessClass,
                    $exceptionGenerator,
                    'form'
                );

                if ($returnType !== null) {
                    $returnTypes[] = $returnType;
                }

                if ($throwType !== null) {
                    $throwTypes[] = $throwType;
                }

                $statements[] = new Stmt\If_(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\FuncCall(new Name('stripos'), [
                            new Node\Arg(
                                new Expr\FuncCall(new Name('strtolower'), [
                                    new Expr\Variable('contentType'),
                                ]),
                            ),
                            new Node\Arg(new Scalar\String_($baseContentType)),
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
                        $this->createStatusCondition($status),
                        $statements[0]->cond
                    )
                ),
                [
                    'stmts' => $statements[0]->stmts,
                ]
            )]];
        }

        return [$returnTypes, $throwTypes, [new Stmt\If_(
            $this->createStatusCondition($status),
            [
                'stmts' => $statements,
            ]
        )]];
    }

    private function createContentDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator, string $format = 'json'): array
    {
        $originalSchema = $schema;
        $classGuess = $guessClass->guessClass($schema, $reference, $context->getRegistry(), $array);

        /** @var Registry $registry */
        $registry = $context->getRegistry();
        if ((int) $status >= 400 && $registry->getGenerateErrorExceptions() && null === $classGuess) {
            $compositeClassGuesses = $guessClass->guessCompositeClasses($originalSchema, $reference, $context->getRegistry());
            $classGuess = $compositeClassGuesses[0] ?? null;
        }

        $returnType = 'null';
        $throwType = null;
        $serializeStmt = new Expr\ConstFetch(new Name('null'));
        $class = null;
        $isBareJsonDecode = false;

        if (null !== $classGuess) {
            $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model' . XNamespaceResolver::subNamespaceSuffix($classGuess) . '\\' . $classGuess->getName();

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
                    new Node\Arg(new Scalar\String_($format)),
                ]
            );
        } elseif ($schema instanceof JsonSchema) {
            $isBareJsonDecode = true;
            $serializeStmt = new Expr\Variable('decodedBody');

            $scalarReturnType = $this->convertResponseType($schema);

            if (null !== $scalarReturnType) {
                $returnType = $scalarReturnType;
            }
        }

        $contentStatement = new Stmt\Return_($serializeStmt);

        $lowerBound = $this->isStatusCodeRange($status) ? $this->statusCodeRangeBounds($status)[0] : (int) $status;
        if ($lowerBound >= 400 && $registry->getGenerateErrorExceptions()) {
            $exceptionName = $exceptionGenerator->generate(
                $name,
                $status,
                $context,
                $classGuess,
                $array,
                $class,
                $description
            );

            $returnType = null;
            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\' . $exceptionName;
            $contentStatement = new Stmt\Expression(new Expr\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [
                new Node\Arg($serializeStmt), new Node\Arg(new Expr\Variable('response')),
            ] : [new Node\Arg(new Expr\Variable('response'))])));
        }

        if ($isBareJsonDecode) {
            $contentStatement = $this->wrapInMalformedJsonHandling($contentStatement);
        }

        return [$returnType, $throwType, $contentStatement];
    }

    /**
     * Raw json_decode() responses must fail loudly on malformed JSON instead
     * of silently returning null: decode with JSON_THROW_ON_ERROR and convert
     * a JsonException into a RuntimeException (after rethrowing the endpoint
     * error exception when one is being built).
     */
    private function wrapInMalformedJsonHandling(Stmt $statement): Stmt\TryCatch
    {
        return new Stmt\TryCatch(
            [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('decodedBody'),
                    new Expr\FuncCall(new Name('json_decode'), [
                        new Node\Arg(new Expr\Variable('body')),
                        new Node\Arg(new Expr\ConstFetch(new Name('false'))),
                        new Node\Arg(new Scalar\LNumber(512)),
                        new Node\Arg(new Expr\ConstFetch(new Name('JSON_THROW_ON_ERROR'))),
                    ])
                )),
                $statement,
            ],
            [
                new Stmt\Catch_(
                    [new Name('\\JsonException')],
                    new Expr\Variable('jsonException'),
                    [
                        new Stmt\Expression(new Expr\Throw_(new Expr\New_(new Name\FullyQualified(MalformedJsonException::class), [
                            new Node\Arg(new Scalar\String_('Malformed JSON response body.')),
                            new Node\Arg(new Expr\ConstFetch(new Name('0'))),
                            new Node\Arg(new Expr\Variable('jsonException')),
                        ]))),
                    ]
                ),
            ]
        );
    }

    private function convertResponseType(JsonSchema $schema): ?string
    {
        $type = $schema->getType();
        if (\is_array($type)) {
            $type = array_filter($type, fn ($t) => $t !== 'null');
            $type = reset($type) ?: null;
        }

        if (null === $type && null !== $schema->getEnum() && \count($schema->getEnum()) > 0) {
            $type = 'string';
        }

        return match ($type) {
            'string' => 'string',
            'number' => $this->isNumberFloat(
                $schema->getFormat(),
                $schema->getDefault(),
                $schema->getMinimum(),
                $schema->getMaximum(),
                $schema->getMultipleOf(),
                $schema->getEnum()
            ) ? 'float' : 'int',
            'boolean' => 'bool',
            'integer' => 'int',
            'array' => 'array',
            default => null,
        };
    }

    private function createStatusCondition(int|string $status): Expr\BinaryOp
    {
        if ($this->isStatusCodeRange($status)) {
            [$min, $max] = $this->statusCodeRangeBounds((string) $status);

            return new Expr\BinaryOp\BooleanAnd(
                new Expr\BinaryOp\GreaterOrEqual(new Expr\Variable('status'), new Scalar\LNumber($min)),
                new Expr\BinaryOp\SmallerOrEqual(new Expr\Variable('status'), new Scalar\LNumber($max))
            );
        }

        return new Expr\BinaryOp\Identical(
            new Scalar\LNumber((int) $status),
            new Expr\Variable('status')
        );
    }
}
