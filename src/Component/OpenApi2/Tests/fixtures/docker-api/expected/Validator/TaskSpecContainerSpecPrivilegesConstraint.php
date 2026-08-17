<?php

namespace Docker\Api\Validator;

class TaskSpecContainerSpecPrivilegesConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['CredentialSpec' => new \Symfony\Component\Validator\Constraints\Optional([]), 'SELinuxContext' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}