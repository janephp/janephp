<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class EventConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['eventDate' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Date(), new \Symfony\Component\Validator\Constraints\Type(type: ['string', 'null'])]), 'createdAt' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\DateTime(format: 'Y-m-d\TH:i:sP'), new \Symfony\Component\Validator\Constraints\Type(type: ['string', 'null'])]), 'updatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\DateTime(format: 'Y-m-d\TH:i:sP'), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'plainDate' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string', 'null'])])], allowExtraFields: true)];
    }
}