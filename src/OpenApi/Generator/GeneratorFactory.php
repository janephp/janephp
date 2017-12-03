<?php

namespace Joli\Jane\OpenApi\Generator;

use Joli\Jane\Jane;
use Joli\Jane\OpenApi\Naming\ChainOperationNaming;
use Joli\Jane\OpenApi\Naming\OperationUrlNaming;
use Joli\Jane\OpenApi\Generator\Parameter\BodyParameterGenerator;
use Joli\Jane\OpenApi\Generator\Parameter\FormDataParameterGenerator;
use Joli\Jane\OpenApi\Generator\Parameter\HeaderParameterGenerator;
use Joli\Jane\OpenApi\Generator\Parameter\PathParameterGenerator;
use Joli\Jane\OpenApi\Generator\Parameter\QueryParameterGenerator;
use Joli\Jane\OpenApi\Naming\OperationIdNaming;
use Joli\Jane\OpenApi\Operation\OperationManager;
use PhpParser\Lexer;
use PhpParser\Parser;
use PhpParser\ParserFactory;

class GeneratorFactory
{
    public static function build($serializer)
    {
        if (class_exists('PhpParser\ParserFactory')) {
            $parserFactory = new ParserFactory();
            $parser = $parserFactory->create(ParserFactory::PREFER_PHP5);
        } else {
            $parser = new Parser(new Lexer());
        }

        $bodyParameter     = new BodyParameterGenerator($parser, $serializer);
        $pathParameter     = new PathParameterGenerator($parser);
        $formDataParameter = new FormDataParameterGenerator($parser);
        $headerParameter   = new HeaderParameterGenerator($parser);
        $queryParameter    = new QueryParameterGenerator($parser);

        $operation = new OperationGenerator($serializer, $bodyParameter, $formDataParameter, $headerParameter, $pathParameter, $queryParameter);
        $operationManager = new OperationManager();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);

        return new ClientGenerator($operationManager, $operation, $operationNaming);
    }
}
