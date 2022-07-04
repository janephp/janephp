<?php

namespace Docker\Api\Validator;

class TaskSpecValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('PluginSpec' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'ContainerSpec' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'NetworkAttachmentSpec' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'RestartPolicy' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Placement' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'ForceUpdate' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'Runtime' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Networks' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'LogDriver' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}