<?php

namespace Docker\Api\Validator;

class TaskSpecResourcesConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Limits' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\LimitConstraint(array()))), 'Reservation' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ResourceObjectConstraint(array())))), 'allowExtraFields' => true)));
    }
}