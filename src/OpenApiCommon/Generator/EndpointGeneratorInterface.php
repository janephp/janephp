<?php

namespace Jane\OpenApiCommon\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;

interface EndpointGeneratorInterface
{
    public function createEndpointClass(OperationGuess $operation, Context $context): array;
}
