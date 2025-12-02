<?php

namespace Docker\Api\Validator;

class ServiceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['ID' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Version' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ObjectVersionConstraint()]), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'UpdatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Endpoint' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ServiceEndpointConstraint()]), 'UpdateStatus' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ServiceUpdateStatusConstraint()]), 'ServiceStatus' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ServiceServiceStatusConstraint()]), 'JobStatus' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ServiceJobStatusConstraint()])], allowExtraFields: true)];
    }
}