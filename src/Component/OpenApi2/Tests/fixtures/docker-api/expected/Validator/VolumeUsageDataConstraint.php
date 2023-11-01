<?php

namespace Docker\Api\Validator;

class VolumeUsageDataConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Size' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])]), 'RefCount' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])])], 'allowExtraFields' => true])];
    }
}