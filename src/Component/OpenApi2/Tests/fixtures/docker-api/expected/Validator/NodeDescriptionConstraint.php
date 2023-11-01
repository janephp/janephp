<?php

namespace Docker\Api\Validator;

class NodeDescriptionConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Hostname' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'Platform' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\PlatformConstraint([])]), 'Resources' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\ResourceObjectConstraint([])]), 'Engine' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\EngineDescriptionConstraint([])]), 'TLSInfo' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\TLSInfoConstraint([])])], 'allowExtraFields' => true])];
    }
}