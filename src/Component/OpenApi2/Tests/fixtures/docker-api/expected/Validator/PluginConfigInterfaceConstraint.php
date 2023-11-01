<?php

namespace Docker\Api\Validator;

class PluginConfigInterfaceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['Types' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'array'])]), 'Socket' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string'])]), 'ProtocolScheme' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\Choice(['choices' => ['', 'moby.plugins.http/v1'], 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'])])], 'allowExtraFields' => true])];
    }
}