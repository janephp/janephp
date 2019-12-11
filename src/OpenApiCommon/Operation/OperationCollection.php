<?php

namespace Jane\OpenApiCommon\Operation;

class OperationCollection extends \ArrayObject
{
    public function addOperation(Operation $operation): self
    {
        $id = $operation->getMethod() . $operation->getPath();

        if ($operation->getOperation()->getOperationId()) {
            $id = $operation->getOperation()->getOperationId();
        }

        $this[$id] = $operation;

        return $this;
    }
}
