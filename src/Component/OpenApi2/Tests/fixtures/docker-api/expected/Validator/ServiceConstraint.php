<?php

namespace Docker\Api\Validator;

class ServiceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('ID' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Version' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ObjectVersionConstraint(array()))), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'UpdatedAt' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Endpoint' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ServiceEndpointConstraint(array()))), 'UpdateStatus' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ServiceUpdateStatusConstraint(array()))), 'ServiceStatus' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ServiceServiceStatusConstraint(array()))), 'JobStatus' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\ServiceJobStatusConstraint(array())))), 'allowExtraFields' => true)));
    }
}