<?php

namespace Jane\Component\OpenApi2\Generator;

use Jane\Component\JsonSchema\Generator\GeneratorInterface;
use Jane\Component\OpenApi2\Generator\Parameter\BodyParameterGenerator;
use Jane\Component\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApiCommon\Generator\EndpointGeneratorInterface;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Generator\OperationGenerator;
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

        $bodyParameter = new BodyParameterGenerator($parser, $serializer);
        $nonBodyParameter = new NonBodyParameterGenerator($parser);
        $exceptionGenerator = new ExceptionGenerator();
        $operationNaming ??= OperationNamingFactory::create();
        $operationNaming = new UniqueOperationNaming($operationNaming);

        if (!$endpointGenerator instanceof EndpointGeneratorInterface) {
            if (!class_exists($endpointGenerator)) {
                throw new \InvalidArgumentException(\sprintf('Unknown generator class %s', $endpointGenerator));
            }

            if (!is_a($endpointGenerator, EndpointGeneratorInterface::class, true)) {
                throw new \InvalidArgumentException(\sprintf('Class %s does not implement %s', $endpointGenerator, EndpointGeneratorInterface::class));
            }

            $endpointGenerator = new $endpointGenerator($operationNaming, $bodyParameter, $nonBodyParameter, $serializer, $exceptionGenerator);
        }

        $operationGenerator = new OperationGenerator($endpointGenerator);

        return new ClientGenerator($operationGenerator, $operationNaming);
    }
}
