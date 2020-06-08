<?php

namespace Jane\OpenApiCommon\Naming;

use Jane\JsonSchema\Tools\InflectorTrait;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;

abstract class OperationUrlNaming implements OperationNamingInterface
{
    use InflectorTrait;

    public function getFunctionName(OperationGuess $operation): string
    {
        return $this->getInflector()->camelize($this->getUniqueName($operation));
    }

    public function getEndpointName(OperationGuess $operation): string
    {
        return $this->getInflector()->classify($this->getUniqueName($operation));
    }

    abstract protected function getUniqueName(OperationGuess $operation): string;
}
