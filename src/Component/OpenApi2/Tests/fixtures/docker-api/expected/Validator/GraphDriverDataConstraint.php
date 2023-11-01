<?php

namespace Docker\Api\Validator;

class GraphDriverDataConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Data' => new \Symfony\Component\Validator\Constraints\Required([])], 'allowExtraFields' => true])];
    }
}