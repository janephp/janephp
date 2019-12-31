<?php

namespace Jane\OpenApiCommon\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApiCommon\Operation\Operation;

class OperationIdNaming implements OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string
    {
        return Inflector::camelize((string) $operation->getOperation()->getOperationId());
    }

    public function getEndpointName(Operation $operation): string
    {
        return Inflector::classify((string) $operation->getOperation()->getOperationId());
    }
}
