<?php

namespace Jane\OpenApi\Naming;

use Jane\OpenApi\Operation\Operation;

interface OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string;

    public function getEndpointName(Operation $operation): string;
}
