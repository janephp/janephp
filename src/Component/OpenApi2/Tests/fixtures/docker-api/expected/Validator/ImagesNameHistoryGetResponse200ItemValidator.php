<?php

namespace Docker\Api\Validator;

class ImagesNameHistoryGetResponse200ItemValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Id' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Created' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'CreatedBy' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Tags' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Size' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Comment' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.'))))), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}