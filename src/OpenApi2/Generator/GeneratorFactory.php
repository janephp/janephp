<?php

namespace Jane\OpenApi2\Generator;

use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\OpenApi2\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\OpenApiCommon\Naming\OperationIdNaming;
use Jane\OpenApi2\Naming\OperationUrlNaming;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GeneratorFactory
{
    public static function build(DenormalizerInterface $serializer): GeneratorInterface
    {
        $parserFactory = new ParserFactory();
        $parser = $parserFactory->create(ParserFactory::PREFER_PHP7);

        $bodyParameter = new BodyParameterGenerator($parser, $serializer);
        $nonBodyParameter = new NonBodyParameterGenerator($parser);
        $exceptionGenerator = new ExceptionGenerator();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);

        $psr7EndpointGenerator = new Psr7EndpointGenerator($operationNaming, $bodyParameter, $nonBodyParameter, $serializer, $exceptionGenerator);
        $psr7OperationGenerator = new Psr7OperationGenerator($psr7EndpointGenerator);

        return new Psr18ClientGenerator($psr7OperationGenerator, $operationNaming);
    }
}
