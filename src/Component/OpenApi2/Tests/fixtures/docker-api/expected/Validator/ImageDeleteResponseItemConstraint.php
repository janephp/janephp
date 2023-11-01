<?php

namespace Docker\Api\Validator;

class ImageDeleteResponseItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Untagged' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Deleted' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])])], 'allowExtraFields' => true])];
    }
}