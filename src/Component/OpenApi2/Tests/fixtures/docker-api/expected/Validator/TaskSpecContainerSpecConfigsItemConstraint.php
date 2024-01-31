<?php

namespace Docker\Api\Validator;

class TaskSpecContainerSpecConfigsItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['File' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Runtime' => new \Symfony\Component\Validator\Constraints\Optional([]), 'ConfigID' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'ConfigName' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])])], 'allowExtraFields' => true])];
    }
}