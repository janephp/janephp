<?php

namespace Jane\OpenApi\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApi\Operation\Operation;

class OperationIdNaming implements OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string
    {
        return Inflector::camelize($operation->getOperation()->getOperationId());
    }

    public function getEndpointName(Operation $operation): string
    {
        return Inflector::classify($operation->getOperation()->getOperationId());
    }
}
