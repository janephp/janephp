<?php

namespace Jane\OpenApi\Generator;

use Jane\OpenApi\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi\Generator\RequestBodyContent\DefaultBodyContentGenerator;
use Jane\OpenApi\Generator\RequestBodyContent\FormBodyContentGenerator;
use Jane\OpenApi\Generator\RequestBodyContent\JsonBodyContentGenerator;
use Jane\OpenApi\JaneOpenApi;
use Jane\OpenApi\Naming\ChainOperationNaming;
use Jane\OpenApi\Naming\ExceptionNaming;
use Jane\OpenApi\Naming\OperationUrlNaming;
use Jane\OpenApi\Naming\OperationIdNaming;
use Jane\OpenApi\Operation\OperationManager;
use PhpParser\ParserFactory;

class GeneratorFactory
{
    public static function build($serializer, $options): array
    {
        $parserFactory = new ParserFactory();
        $parser = $parserFactory->create(ParserFactory::PREFER_PHP7);

        $nonBodyParameter = new NonBodyParameterGenerator($parser);
        $exceptionGenerator = new ExceptionGenerator(new ExceptionNaming());
        $operationManager = new OperationManager();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);

        $defaultContentGenerator = new DefaultBodyContentGenerator($serializer);
        $requestBodyGenerator = new RequestBodyGenerator($defaultContentGenerator);
        $requestBodyGenerator->addRequestBodyGenerator(['application/json'], new JsonBodyContentGenerator($serializer));
        $requestBodyGenerator->addRequestBodyGenerator(['application/x-www-form-urlencoded', 'multipart/form-data'], new FormBodyContentGenerator($serializer));

        $psr7EndpointGenerator = new Psr7EndpointGenerator($operationNaming, $nonBodyParameter, $serializer, $exceptionGenerator, $requestBodyGenerator);
        $psr7OperationGenerator = new Psr7OperationGenerator($psr7EndpointGenerator);

        $generators = [
            $options['client'] === JaneOpenApi::CLIENT_HTTPLUG
                ? new HttplugClientGenerator($operationManager, $psr7OperationGenerator, $operationNaming)
                : new Psr18ClientGenerator($operationManager, $psr7OperationGenerator, $operationNaming),
        ];

        return $generators;
    }
}
