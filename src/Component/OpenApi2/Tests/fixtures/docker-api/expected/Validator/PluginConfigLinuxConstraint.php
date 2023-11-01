<?php

namespace Docker\Api\Validator;

class PluginConfigLinuxConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Capabilities' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'AllowAllDevices' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool'])]), 'Devices' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])])], 'allowExtraFields' => true])];
    }
}