<?php

namespace Docker\Api\Validator;

class DistributionInspectConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Descriptor' => new \Symfony\Component\Validator\Constraints\Required([new \Docker\Api\Validator\OCIDescriptorConstraint([])]), 'Platforms' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])])], 'allowExtraFields' => true])];
    }
}