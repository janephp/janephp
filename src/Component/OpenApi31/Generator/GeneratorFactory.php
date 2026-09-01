<?php

namespace Jane\Component\OpenApi31\Generator;

use Jane\Component\JsonSchema\Generator\GeneratorInterface;
use Jane\Component\OpenApi31\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi31\Generator\RequestBodyContent\FormBodyContentGenerator;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\EndpointGeneratorInterface;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Generator\OperationGenerator;
use Jane\Component\OpenApiCommon\Generator\RequestBodyContent\DefaultBodyContentGenerator;
use Jane\Component\OpenApiCommon\Generator\RequestBodyContent\JsonBodyContentGenerator;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Naming\UniqueOperationNaming;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GeneratorFactory
{
    public static function build(DenormalizerInterface $serializer, EndpointGeneratorInterface|string $endpointGenerator, ?OperationNamingInterface $operationNaming = null): GeneratorInterface
    {
        $parser = (new ParserFactory())->createForHostVersion();

        $nonBodyParameter = new NonBodyParameterGenerator($serializer, $parser);
        $exceptionGenerator = new ExceptionGenerator();
        $operationNaming ??= OperationNamingFactory::create();
        $operationNaming = new UniqueOperationNaming($operationNaming);

        $defaultContentGenerator = new DefaultBodyContentGenerator($serializer, Schema::class);
        $requestBodyGenerator = new RequestBodyGenerator($defaultContentGenerator);
        $requestBodyGenerator->addRequestBodyGenerator(JsonBodyContentGenerator::JSON_TYPES, new JsonBodyContentGenerator($serializer, Schema::class));
        $requestBodyGenerator->addRequestBodyGenerator(['application/x-www-form-urlencoded', 'multipart/form-data'], new FormBodyContentGenerator($serializer));

        if (!$endpointGenerator instanceof EndpointGeneratorInterface) {
            if (!class_exists($endpointGenerator)) {
                throw new \InvalidArgumentException(\sprintf('Unknown generator class %s', $endpointGenerator));
            }

            if (!is_a($endpointGenerator, EndpointGeneratorInterface::class, true)) {
                throw new \InvalidArgumentException(\sprintf('Class %s does not implement %s', $endpointGenerator, EndpointGeneratorInterface::class));
            }

            $endpointGenerator = new $endpointGenerator($operationNaming, $nonBodyParameter, $serializer, $exceptionGenerator, $requestBodyGenerator);
        }

        $operationGenerator = new OperationGenerator($endpointGenerator);

        return new ClientGenerator($operationGenerator, $operationNaming);
    }
}
