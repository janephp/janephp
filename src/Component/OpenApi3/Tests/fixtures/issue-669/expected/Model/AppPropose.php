<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppPropose implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    public AppSpec $spec;
    /**
     * An optional ID of an existing app. If set, the spec will be treated as a proposed update to the specified app. The existing app is not modified using this method.
     *
     * @var string
     */
    public string $appId;
    public function definedProperties(): array
    {
        return ['spec' => 'spec', 'appId' => 'app_id'];
    }
}