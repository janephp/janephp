<?php

namespace Docker\Api\Validator;

class NetworksIdConnectPostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Container' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'EndpointConfig' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
    }
}