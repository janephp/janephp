<?php

namespace Docker\Api\Validator;

class VolumeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Driver' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Mountpoint' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Status' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Labels' => new \Symfony\Component\Validator\Constraints\Required([]), 'Scope' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\Choice(['choices' => ['local', 'global'], 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'])]), 'Options' => new \Symfony\Component\Validator\Constraints\Required([]), 'UsageData' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Docker\Api\Validator\VolumeUsageDataConstraint([])])], 'allowExtraFields' => true])];
    }
}