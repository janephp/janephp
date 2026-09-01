<?php

namespace Jane\Component\OpenApi31\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\OpenApi31\Generator\Endpoint\GetConstructorTrait;
use Jane\Component\OpenApi31\Generator\Endpoint\GetGetBodyTrait;
use Jane\Component\OpenApi31\Generator\Endpoint\GetGetOptionsResolverTrait;
use Jane\Component\OpenApi31\Generator\Endpoint\GetGetQueryAllowReservedTrait;
use Jane\Component\OpenApi31\Generator\Endpoint\GetGetQueryStylesTrait;
use Jane\Component\OpenApi31\Generator\Endpoint\GetGetUriTrait;
use Jane\Component\OpenApi31\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Response;
use Jane\Component\OpenApi31\JsonSchema\Normalizer\ResponseNormalizer;
use Jane\Component\OpenApiCommon\Generator\Endpoint\GetAuthenticationScopesTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\GetFetchModeTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\GetGetExtraHeadersTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\GetGetMethodTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\GetTransformResponseBodyTrait;
use Jane\Component\OpenApiCommon\Generator\EndpointGeneratorInterface;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Generator\Traits\OptionResolverNormalizationTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EndpointGenerator implements EndpointGeneratorInterface
{
    use GetAuthenticationScopesTrait;
    use GetConstructorTrait;
    use GetFetchModeTrait;
    use GetGetBodyTrait;
    use GetGetExtraHeadersTrait;
    use GetGetMethodTrait;
    use GetGetOptionsResolverTrait;
    use GetGetQueryAllowReservedTrait;
    use GetGetQueryStylesTrait;
    use GetGetUriTrait;
    use GetTransformResponseBodyTrait;
    use OptionResolverNormalizationTrait;

    public const IN_PATH = 'path';
    public const IN_QUERY = 'query';
    public const IN_HEADER = 'header';

    private GuessClass $guessClass;

    public function __construct(
        private readonly OperationNamingInterface $operationNaming,
        private readonly NonBodyParameterGenerator $nonBodyParameterGenerator,
        private readonly DenormalizerInterface $denormalizer,
        private readonly ExceptionGenerator $exceptionGenerator,
        private readonly RequestBodyGenerator $requestBodyGenerator,
    ) {
        $this->guessClass = new GuessClass(JsonSchema::class, $denormalizer);
    }

    protected function schemaClassName(): string
    {
        return JsonSchema::class;
    }

    protected function responseClassName(): string
    {
        return Response::class;
    }

    protected function responseNormalizerClassName(): string
    {
        return ResponseNormalizer::class;
    }

    public function createEndpointClass(OperationGuess $operation, Context $context): array
    {
        $naming = new Naming();
        $schema = $context->getCurrentSchema();
        $endpointName = $this->operationNaming->getEndpointName($operation);

        $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'BaseEndpoint'));
        $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'Endpoint'));
        $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'EndpointTrait'));

        [$constructorMethod, $methodParams, $methodParamsDoc, $pathProperties] = $this->getConstructor($operation, $context, $this->guessClass, $this->nonBodyParameterGenerator, $this->requestBodyGenerator);
        [$transformBodyMethod, $outputTypes, $throwTypes] = $this->getTransformResponseBody($operation, $endpointName, $this->guessClass, $this->exceptionGenerator, $context);
        $class = new Stmt\Class_($endpointName, [
            'extends' => new Name\FullyQualified($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'BaseEndpoint')),
            'implements' => [new Name\FullyQualified($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'Endpoint'))],
            'stmts' => array_merge($pathProperties, $constructorMethod === null ? [] : [$constructorMethod], [
                new Stmt\Use_([new Stmt\UseUse(new Name\FullyQualified($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'EndpointTrait')))]),
                $this->getGetMethod($operation),
                $this->getGetUri($operation, $this->guessClass),
                $this->getGetBody($operation, $context, $this->guessClass, $this->requestBodyGenerator),
            ]),
        ]);

        [$genericCustomQueryResolver, $operationCustomQueryResolver] = $this->customOptionResolvers($operation, $context);
        if ($genericCustomQueryResolver || $operationCustomQueryResolver) {
            $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'CustomQueryResolver'));
        }

        $extraHeadersMethod = $this->getExtraHeadersMethod($operation, $this->guessClass, $context);
        $queryResolverMethod = $this->getOptionsResolverMethod($operation, self::IN_QUERY, 'getQueryOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator, $operationCustomQueryResolver, $genericCustomQueryResolver);
        $headerResolverMethod = $this->getOptionsResolverMethod($operation, self::IN_HEADER, 'getHeadersOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator);
        $queryAllowReservedMethod = $this->getQueryAllowReservedMethod($operation, 'getQueryAllowReserved', $this->guessClass);
        $queryStylesMethod = $this->getQueryStylesMethod($operation, 'getQueryStyles', $this->guessClass);

        if ($extraHeadersMethod) {
            $class->stmts[] = $extraHeadersMethod;
        }

        if ($queryResolverMethod) {
            $class->stmts[] = $queryResolverMethod;
        }

        if ($headerResolverMethod) {
            $class->stmts[] = $headerResolverMethod;
        }

        if ($queryAllowReservedMethod) {
            $class->stmts[] = $queryAllowReservedMethod;
        }

        if ($queryStylesMethod) {
            $class->stmts[] = $queryStylesMethod;
        }

        $class->stmts[] = $transformBodyMethod;
        $class->stmts[] = $this->getAuthenticationScopesMethod($operation);
        $class->stmts[] = $this->getFetchModeMethod($operation);

        $subNamespace = $operation->getSubNamespace();
        $endpointPath = $naming->getArtifactPath($schema->getDirectory(), 'Endpoint', $subNamespace);
        $endpointNamespace = $naming->getEndpointNamespace($schema->getNamespace(), $subNamespace);

        $file = new File(
            $endpointPath . \DIRECTORY_SEPARATOR . $endpointName . '.php',
            new Stmt\Namespace_(
                new Name($endpointNamespace),
                [
                    $class,
                ]
            ),
            'Endpoint'
        );

        $schema->addFile($file);

        return [$endpointNamespace . '\\' . $endpointName, $methodParams, $methodParamsDoc, $outputTypes, $throwTypes];
    }
}
