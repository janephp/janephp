<?php

namespace Docker\Api\Validator;

class PluginConfigInterfaceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Types' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'Socket' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'ProtocolScheme' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('', 'moby.plugins.http/v1'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'))))), 'allowExtraFields' => true)));
    }
}