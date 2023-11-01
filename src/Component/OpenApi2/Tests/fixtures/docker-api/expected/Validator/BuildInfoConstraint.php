<?php

namespace Docker\Api\Validator;

class BuildInfoConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['id' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'stream' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'error' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'errorDetail' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ErrorDetailConstraint([])]), 'status' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'progress' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'progressDetail' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ProgressDetailConstraint([])]), 'aux' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ImageIDConstraint([])])], 'allowExtraFields' => true])];
    }
}