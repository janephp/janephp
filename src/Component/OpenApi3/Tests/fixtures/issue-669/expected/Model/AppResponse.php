<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An application's configuration and status.
     *
     * @var App
     */
    public App $app;
    public function definedProperties(): array
    {
        return ['app' => 'app'];
    }
}