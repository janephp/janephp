<?php

namespace Docker\Api\Validator;

class NodeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['ID' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Version' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ObjectVersionConstraint()]), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'UpdatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\NodeSpecConstraint()]), 'Description' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\NodeDescriptionConstraint()]), 'Status' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\NodeStatusConstraint()]), 'ManagerStatus' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Docker\Api\Validator\ManagerStatusConstraint()])], allowExtraFields: true)];
    }
}