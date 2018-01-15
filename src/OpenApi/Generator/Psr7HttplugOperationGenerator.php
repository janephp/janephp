<?php

namespace Jane\OpenApi\Generator;

use Psr\Http\Message\ResponseInterface;

class Psr7HttplugOperationGenerator extends OperationGenerator
{
    protected function getEndpointCallName(): string
    {
        return 'executePsr7Endpoint';
    }

    protected function getResponseClass(): string
    {
        return ResponseInterface::class;
    }
}
