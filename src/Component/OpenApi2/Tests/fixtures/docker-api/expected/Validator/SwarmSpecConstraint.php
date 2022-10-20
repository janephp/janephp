<?php

namespace Docker\Api\Validator;

class SwarmSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Name' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Orchestration' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecOrchestrationConstraint(array()))), 'Raft' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecRaftConstraint(array()))), 'Dispatcher' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecDispatcherConstraint(array()))), 'CAConfig' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecCAConfigConstraint(array()))), 'EncryptionConfig' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecEncryptionConfigConstraint(array()))), 'TaskDefaults' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\SwarmSpecTaskDefaultsConstraint(array())))), 'allowExtraFields' => true)));
    }
}