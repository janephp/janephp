<?php

namespace Jane\OpenApi\Generator;

use Amp\Artax\Request;
use Amp\Artax\Response;
use Amp\CancellationToken;
use Amp\Promise;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Operation\Operation;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

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
