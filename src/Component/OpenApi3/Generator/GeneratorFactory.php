<?php

namespace Jane\Component\OpenApi3\Generator;

use Jane\Component\JsonSchema\Generator\GeneratorInterface;
use Jane\Component\OpenApi3\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi3\Generator\RequestBodyContent\DefaultBodyContentGenerator;
use Jane\Component\OpenApi3\Generator\RequestBodyContent\FormBodyContentGenerator;
use Jane\Component\OpenApi3\Generator\RequestBodyContent\JsonBodyContentGenerator;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Generator\OperationGenerator;
use Jane\Component\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\Component\OpenApiCommon\Naming\OperationIdNaming;
use Jane\Component\OpenApiCommon\Naming\OperationUrlNaming;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GeneratorFactory
{
    public static function build(DenormalizerInterface $serializer, string $endpointGeneratorClass): GeneratorInterface
    {
        $parser = (new ParserFactory())->createForHostVersion();

        $nonBodyParameter = new NonBodyParameterGenerator($serializer, $parser);
        $exceptionGenerator = new ExceptionGenerator();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);

        $defaultContentGenerator = new DefaultBodyContentGenerator($serializer);
        $requestBodyGenerator = new RequestBodyGenerator($defaultContentGenerator);
        $requestBodyGenerator->addRequestBodyGenerator(JsonBodyContentGenerator::JSON_TYPES, new JsonBodyContentGenerator($serializer));
        $requestBodyGenerator->addRequestBodyGenerator(['application/x-www-form-urlencoded', 'multipart/form-data'], new FormBodyContentGenerator($serializer));

        if (!class_exists($endpointGeneratorClass)) {
            throw new \InvalidArgumentException(\sprintf('Unknown generator class %s', $endpointGeneratorClass));
        }

        $endpointGenerator = new $endpointGeneratorClass($operationNaming, $nonBodyParameter, $serializer, $exceptionGenerator, $requestBodyGenerator);
        $operationGenerator = new OperationGenerator($endpointGenerator);

        return new ClientGenerator($operationGenerator, $operationNaming);
    }
}
