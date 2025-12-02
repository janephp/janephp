<?php

namespace Docker\Api\Validator;

class ContainersIdWaitPostResponse200Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['StatusCode' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'Error' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}