<?php

namespace Jane\OpenApi2\Generator;

use Jane\OpenApi2\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi2\JaneOpenApi;
use Jane\OpenApi2\Naming\ChainOperationNaming;
use Jane\OpenApi2\Naming\ExceptionNaming;
use Jane\OpenApi2\Naming\OperationIdNaming;
use Jane\OpenApi2\Naming\OperationUrlNaming;
use Jane\OpenApi2\Operation\OperationManager;
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

        $psr7EndpointGenerator = new Psr7EndpointGenerator($operationNaming, $bodyParameter, $nonBodyParameter, $serializer, $exceptionGenerator);
        $psr7OperationGenerator = new Psr7OperationGenerator($psr7EndpointGenerator);

        $clientAsyncGenerator = null;

        $generators = [
            $options['client'] === JaneOpenApi::CLIENT_HTTPLUG
                ? new HttplugClientGenerator($operationManager, $psr7OperationGenerator, $operationNaming)
                : new Psr18ClientGenerator($operationManager, $psr7OperationGenerator, $operationNaming),
        ];

        if ($options['async']) {
            $ampArtaxEndpointGenerator = new AmpArtaxEndpointGenerator($operationNaming, $bodyParameter, $nonBodyParameter, $serializer, $exceptionGenerator);
            $ampArtaxOperationGenerator = new AmpArtaxOperationGenerator($ampArtaxEndpointGenerator);
            $generators[] = new AmpArtaxClientGenerator($operationManager, $ampArtaxOperationGenerator, $operationNaming);
        }

        return $generators;
    }
}
