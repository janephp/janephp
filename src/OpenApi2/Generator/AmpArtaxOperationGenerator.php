<?php

namespace Jane\OpenApi2\Generator;

use Amp\Artax\Response;

class AmpArtaxOperationGenerator extends OperationGenerator
{
    protected function getEndpointCallName(): string
    {
        return 'executeArtaxEndpoint';
    }

    protected function getReturnDoc($returnTypes, $throwTypes): string
    {
        return implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return \Amp\Promise<' . implode('|', $returnTypes) . '>'
            ;
    }

    protected function getResponseClass(): string
    {
        return Response::class;
    }
}
