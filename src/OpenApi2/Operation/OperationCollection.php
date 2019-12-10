<?php

namespace Jane\OpenApi2\Operation;

class OperationCollection extends \ArrayObject
{
    /**
     * @return self
     */
    public function addOperation(Operation $operation)
    {
        $id = $operation->getMethod() . $operation->getPath();

        if ($operation->getOperation()->getOperationId()) {
            $id = $operation->getOperation()->getOperationId();
        }

        $this[$id] = $operation;

        return $this;
    }
}
