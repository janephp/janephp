<?php

namespace Jane\OpenApi\Generator;

use Jane\OpenApi\Model\Response;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
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
