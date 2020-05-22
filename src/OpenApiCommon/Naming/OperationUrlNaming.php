<?php

namespace Jane\OpenApiCommon\Naming;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;

abstract class OperationUrlNaming implements OperationNamingInterface
{
    private $inflector = null;

    protected function getInflector(): Inflector
    {
        if (null === $this->inflector) {
            $this->inflector = InflectorFactory::create()->build();
        }

        return $this->inflector;
    }

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
