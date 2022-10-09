<?php

namespace Docker\Api\Validator;

class NodeDescriptionConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Hostname' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Platform' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\PlatformConstraint(array()))), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ResourceObjectConstraint(array()))), 'Engine' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\EngineDescriptionConstraint(array()))), 'TLSInfo' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TLSInfoConstraint(array())))), 'allowExtraFields' => true)));
    }
}