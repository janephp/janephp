<?php

namespace Docker\Api\Validator;

class ContainerSummaryNetworkSettingsConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Networks' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}