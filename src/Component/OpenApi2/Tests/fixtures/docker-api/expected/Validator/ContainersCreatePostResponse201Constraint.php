<?php

namespace Docker\Api\Validator;

class ContainersCreatePostResponse201Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Id' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Warnings' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])])], 'allowExtraFields' => true])];
    }
}