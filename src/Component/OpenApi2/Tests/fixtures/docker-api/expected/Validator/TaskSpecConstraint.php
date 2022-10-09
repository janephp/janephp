<?php

namespace Docker\Api\Validator;

class TaskSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('PluginSpec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecPluginSpecConstraint(array()))), 'ContainerSpec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecContainerSpecConstraint(array()))), 'NetworkAttachmentSpec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecNetworkAttachmentSpecConstraint(array()))), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecResourcesConstraint(array()))), 'RestartPolicy' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecRestartPolicyConstraint(array()))), 'Placement' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecPlacementConstraint(array()))), 'ForceUpdate' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'Runtime' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Networks' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'LogDriver' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\TaskSpecLogDriverConstraint(array())))), 'allowExtraFields' => true)));
    }
}