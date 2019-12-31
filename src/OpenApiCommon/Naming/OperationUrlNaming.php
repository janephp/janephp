<?php

namespace Jane\OpenApiCommon\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApiCommon\Operation\Operation;

abstract class OperationUrlNaming implements OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string
    {
        return Inflector::camelize($this->getUniqueName($operation));
    }

    public function getEndpointName(Operation $operation): string
    {
        return Inflector::classify($this->getUniqueName($operation));
    }

    abstract protected function getUniqueName(Operation $operation): string;
}
