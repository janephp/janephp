<?php

namespace Docker\Api\Validator;

class RegistryServiceConfigConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['AllowNondistributableArtifactsCIDRs' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'AllowNondistributableArtifactsHostnames' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'InsecureRegistryCIDRs' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'IndexConfigs' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Mirrors' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])])], 'allowExtraFields' => true])];
    }
}