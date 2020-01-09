<?php

namespace Jane\OpenApi\Generator;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi\JsonSchema\Model\OpenApi;
use Jane\OpenApi\JsonSchema\Model\Parameter;
use Jane\OpenApi\JsonSchema\Model\RequestBody;
use Jane\OpenApi\JsonSchema\Model\Response;
use Jane\OpenApi\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\OpenApiCommon\Operation\Operation;
use Jane\OpenApiRuntime\Client\BaseEndpoint;
use PhpParser\Comment\Doc;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class EndpointGenerator
{
    use GeneratorResolveTrait;

    private const IN_PATH = 'path';
    private const IN_QUERY = 'query';
    private const IN_HEADER = 'header';

    /** @var OperationNamingInterface */
    private $operationNaming;

    /** @var NonBodyParameterGenerator */
    private $nonBodyParameterGenerator;

    /** @var ExceptionGenerator */
    private $exceptionGenerator;

    /** @var RequestBodyGenerator */
    private $requestBodyGenerator;

    public function __construct(
        OperationNamingInterface $operationNaming,
        NonBodyParameterGenerator $nonBodyParameterGenerator,
        DenormalizerInterface $denormalizer,
        ExceptionGenerator $exceptionGenerator,
        RequestBodyGenerator $requestBodyGenerator
    ) {
        $this->operationNaming = $operationNaming;
        $this->nonBodyParameterGenerator = $nonBodyParameterGenerator;
        $this->denormalizer = $denormalizer;
        $this->exceptionGenerator = $exceptionGenerator;
        $this->requestBodyGenerator = $requestBodyGenerator;
    }

    abstract protected function getInterface(): array;

    abstract protected function getTrait(): array;

    public function createEndpointClass(Operation $operation, Context $context): array
    {
        $openApi = $context->getCurrentSchema()->getParsed();
        $endpointName = $this->operationNaming->getEndpointName($operation);

        [$constructorMethod, $methodParams, $methodParamsDoc, $pathProperties] = $this->getConstructor($operation, $context);
        [$transformBodyMethod, $outputTypes, $throwTypes] = $this->getTransformResponseBody($operation, $endpointName, $context);
        $class = new Stmt\Class_($endpointName, [
            'extends' => new Name\FullyQualified(BaseEndpoint::class),
            'implements' => array_map(function ($interface) {
                return new Name\FullyQualified($interface);
            }, $this->getInterface()),
            'stmts' => array_merge($pathProperties, $constructorMethod === null ? [] : [$constructorMethod], [
                new Stmt\Use_(array_map(function ($traitName) {
                    return new Stmt\UseUse(new Name\FullyQualified($traitName));
                }, $this->getTrait())),
                $this->getGetMethod($operation),
                $this->getGetUri($operation),
                $this->getGetBody($operation, $context),
            ]),
        ]);

        $extraHeadersMethod = $this->getExtraHeadersMethod($openApi, $operation);
        $queryResolverMethod = $this->getOptionsResolverMethod($operation, self::IN_QUERY, 'getQueryOptionsResolver');
        $headerResolverMethod = $this->getOptionsResolverMethod($operation, self::IN_HEADER, 'getHeadersOptionsResolver');

        if ($extraHeadersMethod) {
            $class->stmts[] = $extraHeadersMethod;
        }

        if ($queryResolverMethod) {
            $class->stmts[] = $queryResolverMethod;
        }

        if ($headerResolverMethod) {
            $class->stmts[] = $headerResolverMethod;
        }

        $class->stmts[] = $transformBodyMethod;

        $file = new File(
            $context->getCurrentSchema()->getDirectory() . \DIRECTORY_SEPARATOR . 'Endpoint' . \DIRECTORY_SEPARATOR . $endpointName . '.php',
            new Stmt\Namespace_(
                new Name($context->getCurrentSchema()->getNamespace() . '\\Endpoint'),
                [
                    $class,
                ]
            ),
            'Endpoint'
        );

        $context->getCurrentSchema()->addFile($file);

        return [$context->getCurrentSchema()->getNamespace() . '\\Endpoint\\' . $endpointName, $methodParams, $methodParamsDoc, $outputTypes, $throwTypes];
    }

    private function getConstructor(Operation $operation, Context $context): array
    {
        $pathParams = [];
        $bodyParam = null;
        $bodyDoc = null;
        $bodyAssign = null;
        $pathParamsDoc = [];
        $queryParamsDoc = [];
        $headerParamsDoc = [];
        $methodStatements = [];
        $pathProperties = [];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if (!$parameter instanceof \stdClass && $parameter->getSchema() instanceof Reference) {
                [$_, $schema] = $this->resolve($parameter->getSchema(), Schema::class);
                $parameter->setSchema($schema);
            }

            if ($parameter instanceof Parameter && self::IN_PATH === $parameter->getIn()) {
                $pathParams[] = $this->nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $pathParamsDoc[] = $this->nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $methodStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), $parameter->getName()), new Expr\Variable(Inflector::camelize($parameter->getName()))));
                $pathProperties[] = new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
                    new Stmt\PropertyProperty(new Name($parameter->getName())),
                ]);
            }

            if ($parameter instanceof Parameter && self::IN_QUERY === $parameter->getIn()) {
                $queryParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
            if ($parameter instanceof Parameter && self::IN_HEADER === $parameter->getIn()) {
                $headerParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
        }

        if (($requestBody = $operation->getOperation()->getRequestBody()) instanceof RequestBody && null !== $requestBody->getContent()) {
            $bodyParam = $this->requestBodyGenerator->generateMethodParameter($requestBody, $operation->getReference() . '/requestBody', $context);
            $bodyDoc = $this->requestBodyGenerator->generateMethodDocParameter($requestBody, $operation->getReference() . '/requestBody', $context);
            $bodyAssign = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable('requestBody')));
        }

        $methodStatements = array_merge(
            $methodStatements,
            $bodyAssign !== null ? [$bodyAssign] : [],
            \count($queryParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'), new Expr\Variable('queryParameters')))] : [],
            \count($headerParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'headerParameters'), new Expr\Variable('headerParameters')))] : []
        );

        if (\count($methodStatements) === 0) {
            return [null, [], '/**', []];
        }

        $methodParams = array_merge(
            $pathParams,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [new Param(new Expr\Variable('queryParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($headerParamsDoc) > 0 ? [new Param(new Expr\Variable('headerParameters'), new Expr\Array_(), new Name('array'))] : []
        );

        $methodDocumentations = array_merge(
            $pathParamsDoc,
            $bodyDoc ? [$bodyDoc] : [],
            \count($queryParamsDoc) > 0 ? array_merge([' * @param array $queryParameters {'], $queryParamsDoc, [' * }']) : [],
            \count($headerParamsDoc) > 0 ? array_merge([' * @param array $headerParameters {'], $headerParamsDoc, [' * }']) : []
        );

        $methodParamsDoc = <<<EOD
/**
 * {$operation->getOperation()->getDescription()}
 *

EOD
            . implode("\n", $methodDocumentations);

        return [new Stmt\ClassMethod('__construct', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $methodParams,
            'stmts' => $methodStatements,
        ], [
            'comments' => [new Doc($methodParamsDoc . "\n */"),
        ], ]), $methodParams, $methodParamsDoc, $pathProperties];
    }

    private function getGetMethod(Operation $operation): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getMethod', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [
                new Stmt\Return_(new Scalar\String_($operation->getMethod())),
            ],
            'returnType' => new Name('string'),
        ]);
    }

    private function getGetUri(Operation $operation): Stmt\ClassMethod
    {
        $names = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof Parameter && self::IN_PATH === $parameter->getIn()) {
                // $url = str_replace('{param}', $param, $url)
                $names[] = $parameter->getName();
            }
        }

        if (\count($names) === 0) {
            return new Stmt\ClassMethod('getUri', [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [
                    new Stmt\Return_(new Scalar\String_($operation->getPath())),
                ],
                'returnType' => new Name('string'),
            ]);
        }

        return new Stmt\ClassMethod('getUri', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [
                new Stmt\Return_(new Expr\FuncCall(new Name('str_replace'), [
                    new Arg(new Expr\Array_(array_map(function ($name) {
                        return new Scalar\String_('{' . $name . '}');
                    }, $names))),
                    new Arg(new Expr\Array_(array_map(function ($name) {
                        return new Expr\PropertyFetch(new Expr\Variable('this'), $name);
                    }, $names))),
                    new Arg(new Scalar\String_($operation->getPath())),
                ])),
            ],
            'returnType' => new Name('string'),
        ]);
    }

    private function getExtraHeadersMethod(OpenApi $openApi, Operation $operation): ?Stmt\ClassMethod
    {
        $headers = [];
        $produces = [];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $response) {
                if ($response instanceof Reference) {
                    [$_, $response] = $this->resolve($response, Response::class);
                }

                /** @var Response $response */
                if ($response->getContent()) {
                    foreach ($response->getContent() as $contentType => $content) {
                        $produces[] = $contentType;
                    }
                }
            }

            if ($operation->getOperation()->getResponses()->getDefault()) {
                $response = $operation->getOperation()->getResponses()->getDefault();

                if ($response instanceof Reference) {
                    [$_, $response] = $this->resolve($response, Response::class);
                }

                /** @var Response $response */
                if ($response->getContent()) {
                    foreach ($response->getContent() as $contentType => $content) {
                        $produces[] = $contentType;
                    }
                }
            }
        }

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

    private function getOptionsResolverMethod(Operation $operation, string $parameterIn, string $methodName): ?Stmt\ClassMethod
    {
        $parameters = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof Parameter && $parameterIn === $parameter->getIn()) {
                $parameters[] = $parameter;
            }
        }

        if (\count($parameters) === 0) {
            return null;
        }

        $optionsResolverVariable = new Expr\Variable('optionsResolver');

        return new Stmt\ClassMethod($methodName, [
            'type' => Stmt\Class_::MODIFIER_PROTECTED,
            'stmts' => array_merge(
                [
                    new Stmt\Expression(new Expr\Assign($optionsResolverVariable, new Expr\StaticCall(new Name('parent'), $methodName))),
                ],
                $this->nonBodyParameterGenerator->generateOptionsResolverStatements($optionsResolverVariable, $parameters),
                [
                    new Stmt\Return_($optionsResolverVariable),
                ]
            ),
            'returnType' => new Name\FullyQualified(OptionsResolver::class),
        ]);
    }

    private function getGetBody(Operation $operation, Context $context): Stmt\ClassMethod
    {
        $opRef = $operation->getReference() . '/requestBody';
        $requestBody = $operation->getOperation()->getRequestBody();

        if ($requestBody instanceof Reference) {
            [$_, $requestBody] = $this->resolve($requestBody, RequestBody::class);
        }

        return new Stmt\ClassMethod('getBody', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Param(new Expr\Variable('streamFactory'), new Expr\ConstFetch(new Name('null'))),
            ],
            'returnType' => new Name('array'),
            'stmts' => $this->requestBodyGenerator->getSerializeStatements($requestBody, $opRef, $context),
        ]);
    }

    private function getTransformResponseBody(Operation $operation, string $endpointName, Context $context): array
    {
        $outputStatements = [];
        $outputTypes = ['null'];
        $throwTypes = [];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $status => $response) {
                $reference = $operation->getReference() . '/responses/' . $status;

                if ($response instanceof Reference) {
                    [$reference, $response] = $this->resolve($response, Response::class);
                }

                /* @var Response $response */
                [$newOutputTypes, $newThrowTypes, $ifStatements] = $this->createResponseDenormalizationStatement(
                    $endpointName,
                    $status,
                    $response,
                    $context,
                    $reference,
                    $response->getDescription()
                );

                $outputTypes = array_merge($outputTypes, $newOutputTypes);
                $throwTypes = array_merge($throwTypes, $newThrowTypes);
                $outputStatements = array_merge($outputStatements, $ifStatements);
            }

            if ($operation->getOperation()->getResponses()->getDefault()) {
                $response = $operation->getOperation()->getResponses()->getDefault();
                $reference = $operation->getReference() . '/responses/default';

                if ($response instanceof Reference) {
                    [$reference, $response] = $this->resolve($response, Response::class);
                }

                /* @var Response $response */
                [$newOutputTypes, $newThrowTypes, $ifStatements] = $this->createResponseDenormalizationStatement(
                    $endpointName,
                    'default',
                    $response,
                    $context,
                    $reference,
                    $response->getDescription()
                );

                $outputTypes = array_merge($outputTypes, $newOutputTypes);
                $throwTypes = array_merge($throwTypes, $newThrowTypes);
                $outputStatements = array_merge($outputStatements, $ifStatements);
            }

            $outputTypes = array_unique($outputTypes);
            $throwTypes = array_unique($throwTypes);
        }

        $returnDoc = implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $outputTypes);

        return [new Stmt\ClassMethod('transformResponseBody', [
            'type' => Stmt\Class_::MODIFIER_PROTECTED,
            'params' => [
                new Param(new Expr\Variable('body'), null, new Name('string')),
                new Param(new Expr\Variable('status'), null, new Name('int')),
                new Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Param(new Expr\Variable('contentType'), new Expr\ConstFetch(new Name('null')), '?string'),
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

    private function guessClass($schema, string $reference, Context $context)
    {
        $jsonReference = $reference;
        $array = false;

        if ($schema instanceof Reference) {
            [$jsonReference, $schema] = $this->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && 'array' === $schema->getType()) {
            $array = true;
            $jsonReference .= '/items';
            $items = $schema->getItems();

            if ($items instanceof Reference) {
                [$jsonReference, $_] = $this->resolve($items, Schema::class);
            }
        }

        $classGuess = $context->getRegistry()->getClass($jsonReference);

        return [$classGuess, $array, $schema];
    }

    private function createResponseDenormalizationStatement(string $name, string $status, Response $response, Context $context, string $reference, string $description): array
    {
        // No content response
        if (!$response->getContent()) {
            [$returnType, $throwType, $returnStatement] = $this->createContentDenormalizationStatement(
                $name,
                $status,
                null,
                $context,
                $reference,
                $description
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
            if ($contentType === 'application/json') {
                [$returnType, $throwType, $returnStatement] = $this->createContentDenormalizationStatement(
                    $name,
                    $status,
                    $content->getSchema(),
                    $context,
                    $reference . '/content/' . $contentType . '/schema',
                    $description
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
                            new Arg(new Expr\Variable('contentType')),
                            new Arg(new Scalar\String_($contentType)),
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
                        new Scalar\LNumber((int) $status),
                        new Expr\Variable('status')
                    ),
                    $statements[0]->cond
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

    private function createContentDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description): array
    {
        [$classGuess, $array, $schema] = $this->guessClass($schema, $reference, $context);
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

        $contentStatement = new Stmt\Return_($serializeStmt);

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
            $contentStatement = new Stmt\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [
                $serializeStmt,
            ] : []));
        }

        return [$returnType, $throwType, $contentStatement];
    }
}
