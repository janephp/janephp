<?php

namespace Jane\OpenApi\Operation;

use Doctrine\Common\Inflector\Inflector;

class OperationCollection extends \ArrayObject
{
    /**
     * @param Operation $operation
     *
     * @return self
     */
    public function addOperation(Operation $operation)
    {
        $id = $operation->getMethod() . $operation->getPath();
        $group = 'Default';

        if ($operation->getOperation()->getOperationId()) {
            $id = $operation->getOperation()->getOperationId();
        }

        if (null !== $operation->getOperation()->getTags() && count($operation->getOperation()->getTags()) > 0) {
            $group = $operation->getOperation()->getTags()[0];
        }

        $group = trim(preg_replace('/[^a-z0-9 ]+/iu', '', $group));
        $group = Inflector::classify($group);

        if (!isset($this[$group])) {
            $this[$group] = [];
        }

        $this[$group][$id] = $operation;

        return $this;
    }
}
