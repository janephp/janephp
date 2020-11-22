<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

interface EndpointGeneratorInterface
{
    public function createEndpointClass(OperationGuess $operation, Context $context): array;
}
