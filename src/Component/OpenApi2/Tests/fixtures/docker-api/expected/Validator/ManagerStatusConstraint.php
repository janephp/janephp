<?php

namespace Docker\Api\Validator;

class ManagerStatusConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Leader' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool'])]), 'Reachability' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\Choice(['choices' => ['unknown', 'unreachable', 'reachable'], 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'])]), 'Addr' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])])], 'allowExtraFields' => true])];
    }
}