<?php

namespace Github\Validator;

class ScimErrorConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['message' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'documentation_url' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'detail' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'status' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'scimType' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'schemas' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough values. It should have {{ limit }} values or more.'), new \Symfony\Component\Validator\Constraints\Type(type: ['array']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}