<?php

namespace Jane\OpenApiCommon\Naming;

use Jane\OpenApiCommon\Operation\Operation;

interface OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string;

    public function getEndpointName(Operation $operation): string;
}
