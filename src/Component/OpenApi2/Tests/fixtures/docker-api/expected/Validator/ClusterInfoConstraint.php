<?php

namespace Docker\Api\Validator;

class ClusterInfoConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('ID' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Version' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ObjectVersionConstraint(array()))), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'UpdatedAt' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecConstraint(array()))), 'TLSInfo' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TLSInfoConstraint(array()))), 'RootRotationInProgress' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'DataPathPort' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'DefaultAddrPool' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'SubnetSize' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\LessThanOrEqual(array('value' => 29.0)), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer'))))), 'allowExtraFields' => true)));
    }
}