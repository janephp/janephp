<?php

namespace Jane\OpenApi\Generator;

use Psr\Http\Message\ResponseInterface;

class Psr7HttplugOperationGenerator extends OperationGenerator
{
    protected function getEndpointCallName(): string
    {
        return 'executePsr7Endpoint';
    }

    protected function getReturnDoc($returnTypes, $throwTypes): string
    {
        return implode('', array_map(function ($value) {
                return ' * @throws ' . $value . "\n";
            }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $returnTypes)
        ;
    }

    protected function getResponseClass(): string
    {
        return ResponseInterface::class;
    }
}
