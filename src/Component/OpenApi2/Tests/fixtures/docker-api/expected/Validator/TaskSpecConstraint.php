<?php

namespace Docker\Api\Validator;

class TaskSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['PluginSpec' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecPluginSpecConstraint([])]), 'ContainerSpec' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecContainerSpecConstraint([])]), 'NetworkAttachmentSpec' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecNetworkAttachmentSpecConstraint([])]), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecResourcesConstraint([])]), 'RestartPolicy' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecRestartPolicyConstraint([])]), 'Placement' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecPlacementConstraint([])]), 'ForceUpdate' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])]), 'Runtime' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Networks' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'LogDriver' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TaskSpecLogDriverConstraint([])])], 'allowExtraFields' => true])];
    }
}