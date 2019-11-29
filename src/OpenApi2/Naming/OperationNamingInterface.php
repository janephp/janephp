<?php

namespace Jane\OpenApi2\Naming;

use Jane\OpenApi2\Operation\Operation;

interface OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string;

    public function getEndpointName(Operation $operation): string;
}
