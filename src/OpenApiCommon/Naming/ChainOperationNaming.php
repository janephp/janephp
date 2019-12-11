<?php

namespace Jane\OpenApiCommon\Naming;

use Jane\OpenApiCommon\Operation\Operation;

class ChainOperationNaming implements OperationNamingInterface
{
    /**
     * @var OperationNamingInterface[]
     */
    private $operationNamings;

    /**
     * @param OperationNamingInterface[] $operationNamings
     */
    public function __construct(array $operationNamings)
    {
        $this->operationNamings = $operationNamings;
    }

    public function getFunctionName(Operation $operation): string
    {
        foreach ($this->operationNamings as $operationNaming) {
            $functionName = $operationNaming->getFunctionName($operation);

            if (!empty($functionName)) {
                return $functionName;
            }
        }

        throw new \RuntimeException('Cannot generate function name');
    }

    public function getEndpointName(Operation $operation): string
    {
        foreach ($this->operationNamings as $operationNaming) {
            $functionName = $operationNaming->getEndpointName($operation);

            if (!empty($functionName)) {
                return $functionName;
            }
        }

        throw new \RuntimeException('Cannot generate endpoint name');
    }
}
