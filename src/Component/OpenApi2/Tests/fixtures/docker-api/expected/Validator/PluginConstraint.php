<?php

namespace Docker\Api\Validator;

class PluginConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Id' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Enabled' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool'])]), 'Settings' => new \Symfony\Component\Validator\Constraints\Required([new \Docker\Api\Validator\PluginSettingsConstraint([])]), 'PluginReference' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Config' => new \Symfony\Component\Validator\Constraints\Required([new \Docker\Api\Validator\PluginConfigConstraint([])])], 'allowExtraFields' => true])];
    }
}