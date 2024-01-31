<?php

namespace Docker\Api\Validator;

class MountConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Target' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Source' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Type' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\Choice(['choices' => ['bind', 'volume', 'tmpfs', 'npipe'], 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'])]), 'ReadOnly' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool'])]), 'Consistency' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'BindOptions' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\MountBindOptionsConstraint([])]), 'VolumeOptions' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\MountVolumeOptionsConstraint([])]), 'TmpfsOptions' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\MountTmpfsOptionsConstraint([])])], 'allowExtraFields' => true])];
    }
}