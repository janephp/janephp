<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The action that was submitted.
     *
     * @var NfsActionsResponseAction
     */
    public NfsActionsResponseAction $action;
    public function definedProperties(): array
    {
        return ['action' => 'action'];
    }
}