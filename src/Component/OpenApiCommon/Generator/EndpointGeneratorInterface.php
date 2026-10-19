<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

interface EndpointGeneratorInterface
{
    /**
     * Generates the endpoint class of the operation and returns the endpoint
     * FQCN, the client method parameters and their documentation, the return
     * and throw types, then optionally the declared query parameters with
     * their default value and allowed types, as
     * `array<string, array{default: mixed, types: list<string>}>` (used by the
     * `pagination` option).
     */
    public function createEndpointClass(OperationGuess $operation, Context $context): array;
}
