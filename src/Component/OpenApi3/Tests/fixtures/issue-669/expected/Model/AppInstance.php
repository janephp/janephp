<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppInstance implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the component, from the app spec.
     *
     * @var string
     */
    public string $componentName;
    /**
     * Supported compute component by DigitalOcean App Platform.
     *
     * @var string
     */
    public string $componentType;
    /**
     * Name of the instance, which is a unique identifier for the instance.
     *
     * @var string
     */
    public string $instanceName;
    /**
     * Readable identifier, an alias of the instance name, reference for mapping insights to instance names.
     *
     * @var string
     */
    public string $instanceAlias;
    public function definedProperties(): array
    {
        return ['componentName' => 'component_name', 'componentType' => 'component_type', 'instanceName' => 'instance_name', 'instanceAlias' => 'instance_alias'];
    }
}