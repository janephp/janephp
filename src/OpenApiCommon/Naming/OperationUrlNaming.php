<?php

namespace Jane\OpenApiCommon\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;

abstract class OperationUrlNaming implements OperationNamingInterface
{
    public function getFunctionName(OperationGuess $operation): string
    {
        return Inflector::camelize($this->getUniqueName($operation));
    }

    public function getEndpointName(OperationGuess $operation): string
    {
        return Inflector::classify($this->getUniqueName($operation));
    }

    abstract protected function getUniqueName(OperationGuess $operation): string;
}
