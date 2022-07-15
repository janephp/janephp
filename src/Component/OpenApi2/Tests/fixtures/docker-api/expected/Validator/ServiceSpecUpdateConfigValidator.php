<?php

namespace Docker\Api\Validator;

class ServiceSpecUpdateConfigValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Parallelism' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Delay' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'FailureAction' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('continue', 'pause', 'rollback'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Monitor' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'MaxFailureRatio' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'float')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Order' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('stop-first', 'start-first'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.'))))), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}