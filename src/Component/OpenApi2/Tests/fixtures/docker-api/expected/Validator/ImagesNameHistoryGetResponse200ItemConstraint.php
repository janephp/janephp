<?php

namespace Docker\Api\Validator;

class ImagesNameHistoryGetResponse200ItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Id' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Created' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])]), 'CreatedBy' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Tags' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'Size' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])]), 'Comment' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])])], 'allowExtraFields' => true])];
    }
}