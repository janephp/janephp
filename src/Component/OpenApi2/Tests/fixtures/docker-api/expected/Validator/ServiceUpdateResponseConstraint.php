<?php

namespace Docker\Api\Validator;

class ServiceUpdateResponseConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Warnings' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])])], 'allowExtraFields' => true])];
    }
}