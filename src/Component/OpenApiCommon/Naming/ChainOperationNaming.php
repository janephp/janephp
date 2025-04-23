<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

class ChainOperationNaming implements OperationNamingInterface
{
    /**
     * @param OperationNamingInterface[] $operationNamings
     */
    public function __construct(
        private readonly array $operationNamings,
    ) {
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

            if (mb_strlen($functionName) > 0) {
                return $functionName;
            }
        }

        throw new \RuntimeException('Cannot generate endpoint name');
    }
}
