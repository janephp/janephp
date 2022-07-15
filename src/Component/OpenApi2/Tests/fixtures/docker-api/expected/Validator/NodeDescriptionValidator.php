<?php

namespace Docker\Api\Validator;

class NodeDescriptionValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Hostname' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Platform' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Engine' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'TLSInfo' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}