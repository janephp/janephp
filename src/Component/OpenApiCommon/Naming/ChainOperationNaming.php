<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

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

    public function getFunctionName(OperationGuess $operation): string
    {
        foreach ($this->operationNamings as $operationNaming) {
            $functionName = $operationNaming->getFunctionName($operation);

            if (!empty($functionName)) {
                return $functionName;
            }
        }

        throw new \RuntimeException('Cannot generate function name');
    }

    public function getEndpointName(OperationGuess $operation): string
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
