<?php

namespace Docker\Api\Validator;

class TaskStatusValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Timestamp' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'State' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('new', 'allocated', 'pending', 'assigned', 'accepted', 'preparing', 'ready', 'starting', 'running', 'complete', 'shutdown', 'failed', 'rejected', 'remove', 'orphaned'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')))), 'Message' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Err' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string'))))), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}