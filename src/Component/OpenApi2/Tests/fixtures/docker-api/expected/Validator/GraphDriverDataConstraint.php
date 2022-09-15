<?php

namespace Docker\Api\Validator;

class GraphDriverDataConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Name' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Data' => new \Symfony\Component\Validator\Constraints\Required(array())), 'allowExtraFields' => true)));
    }
}