<?php

namespace Docker\Api\Validator;

class MountVolumeOptionsConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['NoCopy' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool'])]), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional([]), 'DriverConfig' => new \Symfony\Component\Validator\Constraints\Optional([])], 'allowExtraFields' => true])];
    }
}