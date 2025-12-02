<?php

namespace Docker\Api\Validator;

class ServicesCreatePostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Name' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional([]), 'TaskTemplate' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Mode' => new \Symfony\Component\Validator\Constraints\Optional([]), 'UpdateConfig' => new \Symfony\Component\Validator\Constraints\Optional([]), 'RollbackConfig' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Networks' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'EndpointSpec' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}