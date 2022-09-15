<?php

namespace Docker\Api\Validator;

class PluginConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Id' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Name' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Enabled' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'Settings' => new \Symfony\Component\Validator\Constraints\Required(array()), 'PluginReference' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Config' => new \Symfony\Component\Validator\Constraints\Required(array(new \PluginConfigInterfaceConstraint(array()), new \PluginConfigUserConstraint(array()), new \PluginConfigNetworkConstraint(array()), new \PluginConfigLinuxConstraint(array()), new \PluginConfigArgsConstraint(array()), new \PluginConfigRootfsConstraint(array())))), 'allowExtraFields' => true)));
    }
}