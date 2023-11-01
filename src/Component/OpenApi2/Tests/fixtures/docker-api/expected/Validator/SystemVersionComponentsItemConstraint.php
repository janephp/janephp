<?php

namespace Docker\Api\Validator;

class SystemVersionComponentsItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Version' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Details' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])])], 'allowExtraFields' => true])];
    }
}