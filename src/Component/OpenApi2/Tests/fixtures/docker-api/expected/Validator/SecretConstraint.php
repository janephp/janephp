<?php

namespace Docker\Api\Validator;

class SecretConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('ID' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Version' => new \Symfony\Component\Validator\Constraints\Optional(array(new \DriverConstraint(array()), new \DriverConstraint(array()), new \Docker\Api\Validator\ObjectVersionConstraint(array()))), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'UpdatedAt' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \DriverConstraint(array()), new \DriverConstraint(array()), new \Docker\Api\Validator\SecretSpecConstraint(array())))), 'allowExtraFields' => true)));
    }
}