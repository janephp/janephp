<?php

namespace Jane\OpenApi\Generator;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Model\BodyParameter;
use Jane\OpenApi\Model\FormDataParameterSubSchema;
use Jane\OpenApi\Model\HeaderParameterSubSchema;
use Jane\OpenApi\Model\OpenApi;
use Jane\OpenApi\Model\PathParameterSubSchema;
use Jane\OpenApi\Model\QueryParameterSubSchema;
use Jane\OpenApi\Operation\Operation;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait InputGeneratorTrait
{
    /**
     * @var Parameter\BodyParameterGenerator
     */
    protected $bodyParameterGenerator;

    /**
     * @var Parameter\FormDataParameterGenerator
     */
    protected $formDataParameterGenerator;

    /**
     * @var Parameter\HeaderParameterGenerator
     */
    protected $headerParameterGenerator;

    /**
     * @var Parameter\PathParameterGenerator
     */
    protected $pathParameterGenerator;

    /**
     * @var Parameter\QueryParameterGenerator
     */
    protected $queryParameterGenerator;

    /**
     * @return DenormalizerInterface
     */
    abstract protected function getDenormalizer();

    protected function createQueryParamStatements(Operation $operation): array
    {
        $queryParamDocumentation = [];
        $queryParamVariable = new Expr\Variable('queryParam');
        $queryParamStatements = [
            new Expr\Assign($queryParamVariable, new Expr\New_(new Name('QueryParam'))),
        ];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof FormDataParameterSubSchema) {
                $queryParamStatements = array_merge($queryParamStatements, $this->formDataParameterGenerator->generateQueryParamStatements($parameter, $queryParamVariable));
                $queryParamDocumentation[] = $this->formDataParameterGenerator->generateQueryDocParameter($parameter);
            }

            if ($parameter instanceof HeaderParameterSubSchema) {
                $queryParamStatements = array_merge($queryParamStatements, $this->headerParameterGenerator->generateQueryParamStatements($parameter, $queryParamVariable));
                $queryParamDocumentation[] = $this->headerParameterGenerator->generateQueryDocParameter($parameter);
            }

            if ($parameter instanceof QueryParameterSubSchema) {
                $queryParamStatements = array_merge($queryParamStatements, $this->queryParameterGenerator->generateQueryParamStatements($parameter, $queryParamVariable));
                $queryParamDocumentation[] = $this->queryParameterGenerator->generateQueryDocParameter($parameter);
            }
        }

        return [$queryParamDocumentation, $queryParamStatements, $queryParamVariable];
    }

    protected function createParameters(Operation $operation, $queryParamDocumentation, Context $context): array
    {
        $documentationParams = [];
        $methodParameters = [];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                $methodParameters[] = $this->pathParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $documentationParams[] = sprintf(' * @param %s', $this->pathParameterGenerator->generateDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key));
            }

            if ($parameter instanceof BodyParameter) {
                $methodParameters[] = $this->bodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $documentationParams[] = sprintf(' * @param %s', $this->bodyParameterGenerator->generateDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key));
            }
        }

        if (!empty($queryParamDocumentation)) {
            $documentationParams[] = ' * @param array  $parameters {';
            $documentationParams = array_merge($documentationParams, array_map(function ($doc) {
                return ' *     ' . $doc;
            }, $queryParamDocumentation));
            $documentationParams[] = ' * }';
        } else {
            $documentationParams[] = ' * @param array  $parameters List of parameters';
        }

        $documentationParams[] = ' * @param string $fetch      Fetch mode (object or response)';

        $methodParameters[] = new Param('parameters', new Expr\Array_(), 'array');
        $methodParameters[] = new Param('fetch', new Expr\ConstFetch(new Name('self::FETCH_OBJECT')), 'string');

        return [$documentationParams, $methodParameters];
    }

    protected function createUrlStatements(Operation $operation, $queryParamVariable)
    {
        $urlVariable = new Expr\Variable('url');
        // url = /path
        $statements = [
            new Expr\Assign($urlVariable, new Scalar\String_($operation->getPath())),
        ];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                // $url = str_replace('{param}', $param, $url)
                $statements[] = new Expr\Assign($urlVariable, new Expr\FuncCall(new Name('str_replace'), [
                    new Arg(new Scalar\String_('{' . $parameter->getName() . '}')),
                    new Arg(new Expr\FuncCall(new Name('urlencode'), [
                        new Arg(new Expr\Variable(Inflector::camelize($parameter->getName()))),
                    ])),
                    new Arg($urlVariable),
                ]));
            }
        }

        // url = url . ? . $queryParam->buildQueryString
        $statements[] = new Expr\Assign($urlVariable, new Expr\BinaryOp\Concat(
            $urlVariable,
            new Expr\BinaryOp\Concat(
                new Scalar\String_('?'),
                new Expr\MethodCall($queryParamVariable, 'buildQueryString', [new Arg(new Expr\Variable('parameters'))])
            )
        ));

        return [$statements, $urlVariable];
    }

    protected function createBodyStatements(Operation $operation, $queryParamVariable, Context $context): array
    {
        $bodyParameter = null;
        $bodyVariable = new Expr\Variable('body');
        $parameterKey = 0;

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $this->resolveParameter($parameter);
            }

            if ($parameter instanceof BodyParameter) {
                $bodyParameter = $parameter;
                $parameterKey = $key;
            }
        }

        if (null === $bodyParameter) {
            // $body = $queryParam->buildFormDataString($parameters);
            return [[
                new Expr\Assign($bodyVariable, new Expr\MethodCall($queryParamVariable, 'buildFormDataString', [new Arg(new Expr\Variable('parameters'))])),
            ], $bodyVariable];
        }

        // $body = $this->serializer->serialize($parameter);
        if ($bodyParameter->getSchema() instanceof Reference || $context->getRegistry()->hasClass($operation->getReference() . '/parameters/' . $parameterKey)) {
            return [
                [
                    new Expr\Assign(
                        $bodyVariable,
                        new Expr\MethodCall(
                            new Expr\PropertyFetch(new Expr\Variable('this'), 'serializer'),
                            'serialize',
                            [
                                new Arg(new Expr\Variable(Inflector::camelize($bodyParameter->getName()))),
                                new Arg(new Scalar\String_('json')),
                            ]
                        )
                    ),
                ],
                $bodyVariable,
            ];
        }

        // $body = $parameter
        return [[
            new Expr\Assign($bodyVariable, new Expr\Variable(Inflector::camelize($bodyParameter->getName()))),
        ], $bodyVariable];
    }

    protected function createHeaderStatements(OpenApi $openApi, Operation $operation, $queryParamVariable): array
    {
        $headerVariable = new Expr\Variable('headers');

        $headers = [];
        $consumes = array_merge(
            $openApi->getConsumes() ?? [],
            $operation->getOperation()->getConsumes() ?? []
        );

        if (\in_array('application/json', $consumes, true)) {
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

        $bodyParameters = array_filter(
            $operation->getParameters(),
            function ($parameter) {
                return $parameter instanceof BodyParameter;
            }
        );

        $formParameters = array_filter(
            $operation->getParameters(),
            function ($parameter) {
                return $parameter instanceof FormDataParameterSubSchema;
            }
        );

        if (\count($bodyParameters) > 0) {
            $headers[] = new Expr\ArrayItem(
                new Scalar\String_('application/json'),
                new Scalar\String_('Content-Type')
            );
        } elseif (\count($formParameters) > 0) {
            $headers[] = new Expr\ArrayItem(
                new Scalar\String_('application/x-www-form-urlencoded'),
                new Scalar\String_('Content-Type')
            );
        }

        $headersStatement = new Expr\MethodCall($queryParamVariable, 'buildHeaders', [new Arg(new Expr\Variable('parameters'))]);

        if (\count($headers) > 0) {
            $headersStatement = new Expr\FuncCall(new Name('array_merge'), [
                new Arg(
                    new Expr\Array_(
                        $headers
                    )
                ),
                new Arg($headersStatement),
            ]);
        }

        return [
            [
                new Expr\Assign(
                    $headerVariable,
                    $headersStatement
                ),
            ],
            $headerVariable,
        ];
    }

    /**
     * @param Reference $parameter
     *
     * @return BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema
     */
    protected function resolveParameter(Reference $parameter)
    {
        return $parameter->resolve(function ($value) {
            if (isset($value->{'in'}) and 'body' == $value->{'in'}) {
                return $this->getDenormalizer()->denormalize($value, 'Jane\\OpenApi\\Model\\BodyParameter');
            }
            if (isset($value->{'in'}) and 'header' == $value->{'in'}) {
                return $this->getDenormalizer()->denormalize($value, 'Jane\\OpenApi\\Model\\HeaderParameterSubSchema');
            }
            if (isset($value->{'in'}) and 'formData' == $value->{'in'}) {
                return $this->getDenormalizer()->denormalize($value, 'Jane\\OpenApi\\Model\\FormDataParameterSubSchema');
            }
            if (isset($value->{'in'}) and 'query' == $value->{'in'}) {
                return $this->getDenormalizer()->denormalize($value, 'Jane\\OpenApi\\Model\\QueryParameterSubSchema');
            }
            if (isset($value->{'in'}) and 'path' == $value->{'in'}) {
                return $this->getDenormalizer()->denormalize($value, 'Jane\\OpenApi\\Model\\PathParameterSubSchema');
            }

            return $value;
        });
    }
}
