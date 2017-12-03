<?php

namespace Jane\OpenApi\Naming;

use Jane\OpenApi\Operation\Operation;

interface OperationNamingInterface
{
    public function generateFunctionName(Operation $operation);
}
