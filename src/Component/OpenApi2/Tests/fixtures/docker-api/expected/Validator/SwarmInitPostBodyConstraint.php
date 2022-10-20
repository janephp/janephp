<?php

namespace Docker\Api\Validator;

class SwarmInitPostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('ListenAddr' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'AdvertiseAddr' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'DataPathAddr' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'DataPathPort' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'DefaultAddrPool' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'ForceNewCluster' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'SubnetSize' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecConstraint(array())))), 'allowExtraFields' => true)));
    }
}