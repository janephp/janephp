<?php

namespace Jane\OpenApi\Generator;

use Doctrine\Common\Inflector\Inflector;
use Http\Message\StreamFactory;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Model\BodyParameter;
use Jane\OpenApi\Model\FormDataParameterSubSchema;
use Jane\OpenApi\Model\HeaderParameterSubSchema;
use Jane\OpenApi\Model\OpenApi;
use Jane\OpenApi\Model\PathParameterSubSchema;
use Jane\OpenApi\Model\QueryParameterSubSchema;
use Jane\OpenApi\Model\Response;
use Jane\OpenApi\Model\Schema;
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

    public function __construct(
        OperationNamingInterface $operationNaming,
        Parameter\BodyParameterGenerator $bodyParameterGenerator,
        Parameter\NonBodyParameterGenerator $nonBodyParameterGenerator,
        DenormalizerInterface $denormalizer,
        ExceptionGenerator $exceptionGenerator
    ) {
        $this->operationNaming = $operationNaming;
        $this->bodyParameterGenerator = $bodyParameterGenerator;
        $this->nonBodyParameterGenerator = $nonBodyParameterGenerator;
        $this->denormalizer = $denormalizer;
        $this->exceptionGenerator = $exceptionGenerator;
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
        $queryResolverMethod = $this->getOptionsResolverMethod($operation, QueryParameterSubSchema::class, 'getQueryOptionsResolver');
        $formResolverMethod = $this->getOptionsResolverMethod($operation, FormDataParameterSubSchema::class, 'getFormOptionsResolver');
        $headerResolverMethod = $this->getOptionsResolverMethod($operation, HeaderParameterSubSchema::class, 'getHeadersOptionsResolver');

        if ($extraHeadersMethod) {
            $class->stmts[] = $extraHeadersMethod;
        }

        if ($queryResolverMethod) {
            $class->stmts[] = $queryResolverMethod;
        }

        if ($formResolverMethod) {
            $class->stmts[] = $formResolverMethod;
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
        $formParamsDoc = [];
        $headerParamsDoc = [];
        $methodStatements = [];
        $pathProperties = [];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                $pathParams[] = $this->nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $pathParamsDoc[] = $this->nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $methodStatements[] = new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), Inflector::camelize($parameter->getName())), new Expr\Variable(Inflector::camelize($parameter->getName())));
                $pathProperties[] = new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
                    new Stmt\PropertyProperty(new Name($parameter->getName())),
                ]);
            }

            if ($parameter instanceof BodyParameter) {
                $bodyParam = $this->bodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyDoc = $this->bodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyAssign = new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable(Inflector::camelize($parameter->getName())));
            }

            if ($parameter instanceof QueryParameterSubSchema) {
                $queryParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }

            if ($parameter instanceof FormDataParameterSubSchema) {
                $formParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }

            if ($parameter instanceof HeaderParameterSubSchema) {
                $headerParamsDoc[] = $this->nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
        }

        $methodStatements = array_merge(
            $methodStatements,
            $bodyAssign !== null ? [$bodyAssign] : [],
            \count($queryParamsDoc) > 0 ? [new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'), new Expr\Variable('queryParameters'))] : [],
            \count($formParamsDoc) > 0 ? [new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'formParameters'), new Expr\Variable('formParameters'))] : [],
            \count($headerParamsDoc) > 0 ? [new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'headerParameters'), new Expr\Variable('headerParameters'))] : []
        );

        if (\count($methodStatements) === 0) {
            return [null, [], '/**', []];
        }

        $methodParams = array_merge(
            $pathParams,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [new Param('queryParameters', new Expr\Array_(), 'array')] : [],
            \count($formParamsDoc) > 0 ? [new Param('formParameters', new Expr\Array_(), 'array')] : [],
            \count($headerParamsDoc) > 0 ? [new Param('headerParameters', new Expr\Array_(), 'array')] : []
        );

        $methodDocumentations = array_merge(
            $pathParamsDoc,
            $bodyDoc ? [$bodyDoc] : [],
            \count($queryParamsDoc) > 0 ? array_merge([' * @param array $queryParameters {'], $queryParamsDoc, [' * }']) : [],
            \count($formParamsDoc) > 0 ? array_merge([' * @param array $formParameters {'], $formParamsDoc, [' * }']) : [],
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

            if ($parameter instanceof PathParameterSubSchema) {
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
        $produces = array_merge(
            $openApi->getProduces() ?? [],
            $operation->getOperation()->getProduces() ?? []
        );

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

    private function getOptionsResolverMethod(Operation $operation, $class, $methodName): ?Stmt\ClassMethod
    {
        $parameters = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if (is_a($parameter, $class)) {
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
        $hasBody = false;
        $isSerializableBody = false;
        $isFormBody = false;
        $hasFileInForm = false;
        $consumes = is_array($operation->getOperation()->getConsumes()) ? $operation->getOperation()->getConsumes() : [$operation->getOperation()->getConsumes()];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof BodyParameter && $parameter->getSchema() !== null) {
                $hasBody = true;

                [$classGuess, $array, $schema] = $this->guessClass($parameter->getSchema(), $operation->getReference() . '/parameters/' . $key, $context);

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
            'params' => [
                new Param('serializer', null, new Name\FullyQualified(SerializerInterface::class)),
                new Param('streamFactory', new Expr\ConstFetch(new Name('null')), new Name\FullyQualified(StreamFactory::class)),
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

    private function createResponseDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description)
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
            if (isset($value->{'in'}) and 'body' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, BodyParameter::class);
            }
            if (isset($value->{'in'}) and 'header' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, HeaderParameterSubSchema::class);
            }
            if (isset($value->{'in'}) and 'formData' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, FormDataParameterSubSchema::class);
            }
            if (isset($value->{'in'}) and 'query' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, QueryParameterSubSchema::class);
            }
            if (isset($value->{'in'}) and 'path' === $value->{'in'}) {
                return $this->denormalizer->denormalize($value, PathParameterSubSchema::class);
            }

            return $value;
        });
    }
}
