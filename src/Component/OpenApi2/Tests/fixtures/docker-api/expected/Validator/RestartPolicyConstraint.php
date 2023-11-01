<?php

namespace Docker\Api\Validator;

class RestartPolicyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\Choice(['choices' => ['', 'no', 'always', 'unless-stopped', 'on-failure'], 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'])]), 'MaximumRetryCount' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])])], 'allowExtraFields' => true])];
    }
}