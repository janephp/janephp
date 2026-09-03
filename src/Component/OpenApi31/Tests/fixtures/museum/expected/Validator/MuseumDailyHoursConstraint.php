<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Validator;

class MuseumDailyHoursConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['date' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Date(), new \Symfony\Component\Validator\Constraints\NotBlank(), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'timeOpen' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Regex(pattern: '#^([01]\d|2[0-3]):?([0-5]\d)$#', message: 'This value is not valid.'), new \Symfony\Component\Validator\Constraints\NotBlank(), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'timeClose' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Regex(pattern: '#^([01]\d|2[0-3]):?([0-5]\d)$#', message: 'This value is not valid.'), new \Symfony\Component\Validator\Constraints\NotBlank(), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}