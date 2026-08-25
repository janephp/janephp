<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppInstance implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name of the component, from the app spec.
     *
     * @var string
     */
    protected $componentName;
    /**
     * Supported compute component by DigitalOcean App Platform.
     *
     * @var string
     */
    protected $componentType;
    /**
     * Name of the instance, which is a unique identifier for the instance.
     *
     * @var string
     */
    protected $instanceName;
    /**
     * Readable identifier, an alias of the instance name, reference for mapping insights to instance names.
     *
     * @var string
     */
    protected $instanceAlias;
    /**
     * Name of the component, from the app spec.
     *
     * @return string
     */
    public function getComponentName(): string
    {
        return $this->componentName;
    }
    /**
     * Name of the component, from the app spec.
     *
     * @param string $componentName
     *
     * @return self
     */
    public function setComponentName(string $componentName): self
    {
        $this->initialized['componentName'] = true;
        $this->componentName = $componentName;
        return $this;
    }
    /**
     * Supported compute component by DigitalOcean App Platform.
     *
     * @return string
     */
    public function getComponentType(): string
    {
        return $this->componentType;
    }
    /**
     * Supported compute component by DigitalOcean App Platform.
     *
     * @param string $componentType
     *
     * @return self
     */
    public function setComponentType(string $componentType): self
    {
        $this->initialized['componentType'] = true;
        $this->componentType = $componentType;
        return $this;
    }
    /**
     * Name of the instance, which is a unique identifier for the instance.
     *
     * @return string
     */
    public function getInstanceName(): string
    {
        return $this->instanceName;
    }
    /**
     * Name of the instance, which is a unique identifier for the instance.
     *
     * @param string $instanceName
     *
     * @return self
     */
    public function setInstanceName(string $instanceName): self
    {
        $this->initialized['instanceName'] = true;
        $this->instanceName = $instanceName;
        return $this;
    }
    /**
     * Readable identifier, an alias of the instance name, reference for mapping insights to instance names.
     *
     * @return string
     */
    public function getInstanceAlias(): string
    {
        return $this->instanceAlias;
    }
    /**
     * Readable identifier, an alias of the instance name, reference for mapping insights to instance names.
     *
     * @param string $instanceAlias
     *
     * @return self
     */
    public function setInstanceAlias(string $instanceAlias): self
    {
        $this->initialized['instanceAlias'] = true;
        $this->instanceAlias = $instanceAlias;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['componentName' => ['component_name', 'getComponentName', 'setComponentName'], 'componentType' => ['component_type', 'getComponentType', 'setComponentType'], 'instanceName' => ['instance_name', 'getInstanceName', 'setInstanceName'], 'instanceAlias' => ['instance_alias', 'getInstanceAlias', 'setInstanceAlias']];
    }
}