<?php

namespace Jane\OpenApi\Generator;

use Jane\OpenApi\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi\Naming\ChainOperationNaming;
use Jane\OpenApi\Naming\ExceptionNaming;
use Jane\OpenApi\Naming\OperationUrlNaming;
use Jane\OpenApi\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi\Generator\Parameter\FormDataParameterGenerator;
use Jane\OpenApi\Generator\Parameter\HeaderParameterGenerator;
use Jane\OpenApi\Generator\Parameter\PathParameterGenerator;
use Jane\OpenApi\Generator\Parameter\QueryParameterGenerator;
use Jane\OpenApi\Naming\OperationIdNaming;
use Jane\OpenApi\Operation\OperationManager;
use PhpParser\ParserFactory;

class GeneratorFactory
{
    public static function build($serializer, $options): array
    {
        $parserFactory = new ParserFactory();
        $parser = $parserFactory->create(ParserFactory::PREFER_PHP7);

        $bodyParameter = new BodyParameterGenerator($parser, $serializer);
        $nonBodyParameter = new NonBodyParameterGenerator($parser);
        $exceptionGenerator = new ExceptionGenerator(new ExceptionNaming());
        $operationManager = new OperationManager();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);
        $endpointGenerator = new EndpointGenerator($operationNaming, $bodyParameter, $nonBodyParameter, $serializer, $exceptionGenerator);
        $psrHttplugOperationGenerator = new Psr7HttplugOperationGenerator($endpointGenerator);
        $clientAsyncGenerator = null;

        $generators = [
            new Psr7HttplugClientGenerator($operationManager, $psrHttplugOperationGenerator, $operationNaming),
        ];

        if ($options['async']) {
            $ampArtaxOperationGenerator = new AmpArtaxOperationGenerator($endpointGenerator);
            $generators[] = new AmpArtaxClientGenerator($operationManager, $ampArtaxOperationGenerator, $operationNaming);
        }

        return $generators;
    }
}
