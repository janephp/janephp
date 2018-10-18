<?php

namespace Jane\OpenApi\Generator;

use Doctrine\Common\Inflector\Inflector;
use Http\Message\StreamFactory;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\JsonSchema\Version3\Model\OpenApi;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithContentInPath;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExampleInHeader;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExampleInPath;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExampleInQuery;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExamplesInHeader;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExamplesInPath;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExamplesInQuery;
use Jane\OpenApi\JsonSchema\Version3\Model\Response;
use Jane\OpenApi\JsonSchema\Version3\Model\Schema;
use Jane\OpenApi\Naming\OperationNamingInterface;
use Jane\OpenApi\Operation\Operation;
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
    /** @var OperationNamingInterface */
    private $operationNaming;

    /** @var Parameter\BodyParameterGenerator */
    private $bodyParameterGenerator;

    /** @var Parameter\NonBodyParameterGenerator */
    private $nonBodyParameterGenerator;

    /** @var DenormalizerInterface */
    private $denormalizer;

    /** @var ExceptionGenerator */
    private $exceptionGenerator;

    /** @var RequestBodyGenerator */
    private $requestBodyGenerator;

    public function __construct(
        OperationNamingInterface $operationNaming,
        Parameter\BodyParameterGenerator $bodyParameterGenerator,
        Parameter\NonBodyParameterGenerator $nonBodyParameterGenerator,
        DenormalizerInterface $denormalizer,
        ExceptionGenerator $exceptionGenerator,
        RequestBodyGenerator $requestBodyGenerator
    ) {
        $this->operationNaming = $operationNaming;
        $this->bodyParameterGenerator = $bodyParameterGenerator;
        $this->nonBodyParameterGenerator = $nonBodyParameterGenerator;
        $this->denormalizer = $denormalizer;
        $this->exceptionGenerator = $exceptionGenerator;
        $this->requestBodyGenerator = $requestBodyGenerator;
    }

    abstract protected function getInterface(): array;

    abstract protected function getTrait(): array;

    public function createEndpointClass(Operation $operation, Context $context, bool $async = false): array
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
        $queryResolverMethod = $this->getOptionsResolverMethod($operation, [ParameterWithSchemaWithExampleInQuery::class, ParameterWithSchemaWithExamplesInQuery::class], 'getQueryOptionsResolver');
        $headerResolverMethod = $this->getOptionsResolverMethod($operation, [ParameterWithSchemaWithExampleInHeader::class, ParameterWithSchemaWithExamplesInHeader::class], 'getHeadersOptionsResolver');

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

            if ($parameter instanceof ParameterWithSchemaWithExampleInPath || $parameter instanceof ParameterWithSchemaWithExamplesInPath) {
                $pathParams[] = $this->nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $pathParamsDoc[] = $this->nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $methodStatements[] = new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), Inflector::camelize($parameter->getName())), new Expr\Variable(Inflector::camelize($parameter->getName())));
                $pathProperties[] = new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
                    new Stmt\PropertyProperty(new Name($parameter->getName())),
                ]);
            }

            if ($parameter instanceof ParameterWithSchemaWithExampleInQuery || $parameter instanceof ParameterWithSchemaWithExamplesInQuery) {
                $queryParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }

            if ($parameter instanceof ParameterWithSchemaWithExampleInHeader || $parameter instanceof ParameterWithSchemaWithExamplesInHeader) {
                $headerParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
        }

        $requestBody = $operation->getOperation()->getRequestBody();

        if ($requestBody && $requestBody->getContent()) {
            foreach ($requestBody->getContent() as $contentType => $content) {
                $bodyParam = $this->bodyParameterGenerator->generateMethodParameter($content, $context, $operation->getReference() . '/requestBody/content/' . $contentType);
                $bodyDoc = $this->bodyParameterGenerator->generateMethodDocParameter($content, $context, $operation->getReference() . '/requestBody/content/' . $contentType);
                $bodyAssign = new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable('requestBody'));
            }
        }

        $methodStatements = array_merge(
            $methodStatements,
            $bodyAssign !== null ? [$bodyAssign] : [],
            \count($queryParamsDoc) > 0 ? [new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'), new Expr\Variable('queryParameters'))] : [],
            \count($headerParamsDoc) > 0 ? [new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'headerParameters'), new Expr\Variable('headerParameters'))] : []
        );

        if (\count($methodStatements) === 0) {
            return [null, [], '/**', []];
        }

        $methodParams = array_merge(
            $pathParams,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [new Param('queryParameters', new Expr\Array_(), 'array')] : [],
            \count($headerParamsDoc) > 0 ? [new Param('headerParameters', new Expr\Array_(), 'array')] : []
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
            'params' => $methodParams,
            'stmts' => $methodStatements,
        ], [
            'comments' => [new Doc($methodParamsDoc . "\n */"),
        ], ]), $methodParams, $methodParamsDoc, $pathProperties];
    }

    private function getGetMethod(Operation $operation): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getMethod', [
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

            if ($parameter instanceof ParameterWithSchemaWithExampleInPath || $parameter instanceof ParameterWithSchemaWithExamplesInPath) {
                // $url = str_replace('{param}', $param, $url)
                $names[] = $parameter->getName();
            }
        }

        if (\count($names) === 0) {
            return new Stmt\ClassMethod('getUri', [
                'stmts' => [
                    new Stmt\Return_(new Scalar\String_($operation->getPath())),
                ],
                'returnType' => new Name('string'),
            ]);
        }

        return new Stmt\ClassMethod('getUri', [
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
            'stmts' => [
                new Stmt\Return_(new Expr\Array_($headers)),
            ],
            'returnType' => new Name('array'),
        ]);
    }

    private function getOptionsResolverMethod(Operation $operation, $classes, $methodName): ?Stmt\ClassMethod
    {
        $parameters = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            foreach ($classes as $class) {
                if (is_a($parameter, $class)) {
                    $parameters[] = $parameter;
                }
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
                    new Expr\Assign($optionsResolverVariable, new Expr\StaticCall(new Name('parent'), $methodName)),
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
        return new Stmt\ClassMethod('getBody', [
            'params' => [
                new Param('serializer', null, new Name\FullyQualified(SerializerInterface::class)),
                new Param('streamFactory', new Expr\ConstFetch(new Name('null')), new Name\FullyQualified(StreamFactory::class)),
            ],
            'returnType' => new Name('array'),
            'stmts' => $this->requestBodyGenerator->getSerializeStatements($operation->getOperation()->getRequestBody(), $operation->getReference() . '/requestBody', $context)
        ]);

        $hasBody = false;
        $isSerializableBody = false;
        $requestBody = $operation->getOperation()->getRequestBody();

//        if ($requestBody && $requestBody->getContent()) {
//            foreach ($requestBody->getContent() as $contentType => $content) {
//                if ($content->getSchema() !== null) {
//                    $hasBody = true;
//
//                    [$classGuess, $array, $schema] = $this->guessClass($content->getSchema(), $operation->getReference() . '/requestBody/content/' . $contentType . '/schema', $context);
//
//                    if ($contentType === 'application/json') {
//                        $isSerializableBody = true;
//                    }
//
//                    if (null !== $classGuess) {
//                        $isSerializableBody = true;
//                    }
//                }
//            }
//        }

//        if ($isSerializableBody) {
//            $method->stmts = [
//                new Stmt\Return_(new Expr\MethodCall(
//                    new Expr\Variable('this'),
//                    'getSerializedBody',
//                    [
//                        new Arg(new Expr\Variable('serializer')),
//                    ]
//                )),
//            ];
//
//            return $method;
//        }
//
//        if ($hasBody) {
//            $method->stmts = [
//                new Stmt\Return_(new Expr\Array_([
//                    new Expr\Array_(),
//                    new Expr\PropertyFetch(
//                        new Expr\Variable('this'),
//                        'body'
//                    ),
//                ])),
//            ];
//
//            return $method;
//        }
//
//        $method->stmts = [
//            new Stmt\Return_(new Expr\Array_([
//                new Expr\Array_(),
//                new Expr\ConstFetch(new Name('null')),
//            ])),
//        ];

        return $method;
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
                new Param('body', null, 'string'),
                new Param('status', null, 'int'),
                new Param('serializer', null, new Name\FullyQualified(SerializerInterface::class)),
                new Param('contentType', new Expr\ConstFetch(new Name('null')), '?string'),
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

    private function createResponseDenormalizationStatement(string $name, string $status, Response $response, Context $context, string $reference, string $description)
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
                    new Expr\BinaryOp\Identical(
                        new Scalar\String_($contentType),
                        new Expr\Variable('contentType')
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

    private function createContentDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description)
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

    /**
     * @param Reference $reference
     * @param $class
     *
     * @return mixed
     */
    private function resolve(Reference $reference, $class)
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }

    private function resolveParameter(Reference $parameter)
    {
        return $parameter->resolve(function ($value) {
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'path') and (isset($value->{'required'}) and $value->{'required'} == '1') and isset($value->{'schema'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExampleInPath', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'query') and isset($value->{'schema'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExampleInQuery', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'header') and isset($value->{'schema'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExampleInHeader', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'cookie') and isset($value->{'schema'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExampleInCookie', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'path') and (isset($value->{'required'}) and $value->{'required'} == '1') and isset($value->{'schema'}) and isset($value->{'examples'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExamplesInPath', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'query') and isset($value->{'schema'}) and isset($value->{'examples'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExamplesInQuery', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'header') and isset($value->{'schema'}) and isset($value->{'examples'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExamplesInHeader', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'cookie') and isset($value->{'schema'}) and isset($value->{'examples'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithSchemaWithExamplesInCookie', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and $value->{'in'} == 'path') and isset($value->{'content'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithContentInPath', 'json');
            }
            if (is_object($value) and isset($value->{'name'}) and (isset($value->{'in'}) and ($value->{'in'} == 'query' or $value->{'in'} == 'header' or $value->{'in'} == 'cookie')) and isset($value->{'content'})) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ParameterWithContentNotInPath', 'json');
            }

            return $value;
        });
    }
}
