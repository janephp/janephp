<?php

namespace Jane\OpenApi\Generator;

use Amp\Artax\Response;

class AmpArtaxOperationGenerator extends OperationGenerator
{
    protected function getEndpointCallName(): string
    {
        return 'executeArtaxEndpoint';
    }

    protected function getResponseClass(): string
    {
        return Response::class;
    }
}
