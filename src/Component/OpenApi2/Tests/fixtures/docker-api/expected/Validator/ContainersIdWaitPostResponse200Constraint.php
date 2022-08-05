<?php

namespace Docker\Api\Validator;

class ContainersIdWaitPostResponse200Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('StatusCode' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'Error' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
    }
}