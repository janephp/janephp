<?php

namespace Docker\Api\Validator;

class TaskStatusConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Timestamp' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'State' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\Choice(['choices' => ['new', 'allocated', 'pending', 'assigned', 'accepted', 'preparing', 'ready', 'starting', 'running', 'complete', 'shutdown', 'failed', 'rejected', 'remove', 'orphaned'], 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'])]), 'Message' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Err' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'ContainerStatus' => new \Symfony\Component\Validator\Constraints\Optional([])], 'allowExtraFields' => true])];
    }
}