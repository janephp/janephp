<?php

namespace Docker\Api\Validator;

class VolumesCreatePostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Name' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Driver' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'DriverOpts' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
    }
}