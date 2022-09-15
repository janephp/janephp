<?php

namespace Docker\Api\Validator;

class TaskSpecConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('PluginSpec' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'ContainerSpec' => new \Symfony\Component\Validator\Constraints\Optional(array(new \TaskSpecContainerSpecPrivilegesConstraint(array()), new \HealthConfigConstraint(array()), new \TaskSpecContainerSpecDNSConfigConstraint(array()))), 'NetworkAttachmentSpec' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional(array(new \LimitConstraint(array()), new \ResourceObjectConstraint(array()))), 'RestartPolicy' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Placement' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'ForceUpdate' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')))), 'Runtime' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Networks' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'LogDriver' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
    }
}