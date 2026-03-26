<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Stmt;

trait GetGetQueryAllowReservedTrait
{
    /**
     * OpenAPI 3.1 Parameter model lacks getAllowReserved() since it's defined
     * via dependentSchemas in the specification. Always returns null.
     */
    public function getQueryAllowReservedMethod(OperationGuess $operation, string $methodName, GuessClass $guessClass): ?Stmt\ClassMethod
    {
        return null;
    }
}
