<?php

namespace Docker\Api\Validator;

class SecretSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Data' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Driver' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\DriverConstraint([])]), 'Templating' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\DriverConstraint([])])], 'allowExtraFields' => true])];
    }
}