<?php

namespace Jane\OpenApi2\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApi2\Generator\Endpoint\GetConstructorTrait;
use Jane\OpenApi2\Generator\Endpoint\GetGetBodyTrait;
use Jane\OpenApi2\Generator\Endpoint\GetGetExtraHeadersTrait;
use Jane\OpenApi2\Generator\Endpoint\GetGetUriTrait;
use Jane\OpenApi2\Generator\Endpoint\GetOptionsResolverMethodTrait;
use Jane\OpenApi2\Generator\Endpoint\GetTransformResponseBodyTrait;
use Jane\OpenApi2\Guesser\GuessClass;
use Jane\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Generator\Endpoint\GetAuthenticationScopesTrait;
use Jane\OpenApiCommon\Generator\Endpoint\GetGetMethodTrait;
use Jane\OpenApiCommon\Generator\EndpointGeneratorInterface;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Generator\Traits\OptionResolverNormalizationTrait;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Naming\OperationNamingInterface;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EndpointGenerator implements EndpointGeneratorInterface
{
    use GetAuthenticationScopesTrait;
    use GetConstructorTrait;
    use GetGetBodyTrait;
    use GetGetExtraHeadersTrait;
    use GetGetMethodTrait;
    use GetGetUriTrait;
    use GetOptionsResolverMethodTrait;
    use GetTransformResponseBodyTrait;
    use OptionResolverNormalizationTrait;

    /** @var OperationNamingInterface */
    private $operationNaming;

    /** @var Parameter\BodyParameterGenerator */
    private $bodyParameterGenerator;

    /** @var Parameter\NonBodyParameterGenerator */
    private $nonBodyParameterGenerator;

    /** @var ExceptionGenerator */
    private $exceptionGenerator;

    /** @var GuessClass */
    private $guessClass;

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
        $this->exceptionGenerator = $exceptionGenerator;
        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    public function createEndpointClass(OperationGuess $operation, Context $context): array
    {
        $naming = new Naming();
        $openApi = $context->getCurrentSchema()->getParsed();
        $endpointName = $this->operationNaming->getEndpointName($operation);

        [$constructorMethod, $methodParams, $methodParamsDoc, $pathProperties] = $this->getConstructor($operation, $context, $this->guessClass, $this->bodyParameterGenerator, $this->nonBodyParameterGenerator);
        [$transformBodyMethod, $outputTypes, $throwTypes] = $this->getTransformResponseBody($operation, $endpointName, $this->guessClass, $this->exceptionGenerator, $context);
        $class = new Stmt\Class_($endpointName, [
            'extends' => new Name\FullyQualified($naming->getRuntimeClassFQCN($context->getCurrentSchema()->getNamespace(), ['Client'], 'BaseEndpoint')),
            'implements' => [new Name\FullyQualified($naming->getRuntimeClassFQCN($context->getCurrentSchema()->getNamespace(), ['Client'], 'Endpoint'))],
            'stmts' => array_merge($pathProperties, $constructorMethod === null ? [] : [$constructorMethod], [
                new Stmt\Use_([new Stmt\UseUse(new Name\FullyQualified($naming->getRuntimeClassFQCN($context->getCurrentSchema()->getNamespace(), ['Client'], 'EndpointTrait')))]),
                $this->getGetMethod($operation),
                $this->getGetUri($operation, $this->guessClass),
                $this->getGetBody($operation, $context),
            ]),
        ]);

        [$genericCustomQueryResolver, $operationCustomQueryResolver] = $this->customOptionResolvers($operation, $context);

        $extraHeadersMethod = $this->getExtraHeadersMethod($openApi, $operation);
        $queryResolverMethod = $this->getOptionsResolverMethod($operation, QueryParameterSubSchema::class, 'getQueryOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator, $operationCustomQueryResolver, $genericCustomQueryResolver);
        $formResolverMethod = $this->getOptionsResolverMethod($operation, FormDataParameterSubSchema::class, 'getFormOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator);
        $headerResolverMethod = $this->getOptionsResolverMethod($operation, HeaderParameterSubSchema::class, 'getHeadersOptionsResolver', $this->guessClass, $this->nonBodyParameterGenerator);

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
        $class->stmts[] = $this->getAuthenticationScopesMethod($operation);

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
}
