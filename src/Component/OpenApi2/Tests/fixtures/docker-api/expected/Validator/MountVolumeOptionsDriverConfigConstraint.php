<?php

namespace Docker\Api\Validator;

class MountVolumeOptionsDriverConfigConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Options' => new \Symfony\Component\Validator\Constraints\Optional([])], 'allowExtraFields' => true])];
    }
}