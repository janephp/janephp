<?php

namespace Docker\Api\Validator;

class TaskSpecContainerSpecConfigsItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('File' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Runtime' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'ConfigID' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'ConfigName' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string'))))), 'allowExtraFields' => true)));
    }
}