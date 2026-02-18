<?php

namespace Docker\Api\Validator;

class BuildInfoConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['id' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'stream' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'error' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'errorDetail' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ErrorDetailConstraint()]), 'status' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'progress' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'progressDetail' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ProgressDetailConstraint()]), 'aux' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ImageIDConstraint()])], allowExtraFields: true)];
    }
}