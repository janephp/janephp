<?php

namespace Docker\Api\Validator;

class SwarmSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Name' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Orchestration' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'Raft' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Dispatcher' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'CAConfig' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'EncryptionConfig' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'TaskDefaults' => new \Symfony\Component\Validator\Constraints\Optional(array(new \SwarmSpecTaskDefaultsLogDriverConstraint(array())))), 'allowExtraFields' => true)));
    }
}