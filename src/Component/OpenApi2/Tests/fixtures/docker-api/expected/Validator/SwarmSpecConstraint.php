<?php

namespace Docker\Api\Validator;

class SwarmSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Name' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Orchestration' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Docker\Api\Validator\SwarmSpecOrchestrationConstraint([])]), 'Raft' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\SwarmSpecRaftConstraint([])]), 'Dispatcher' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Docker\Api\Validator\SwarmSpecDispatcherConstraint([])]), 'CAConfig' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Docker\Api\Validator\SwarmSpecCAConfigConstraint([])]), 'EncryptionConfig' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\SwarmSpecEncryptionConfigConstraint([])]), 'TaskDefaults' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\SwarmSpecTaskDefaultsConstraint([])])], 'allowExtraFields' => true])];
    }
}