<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResourceResourcesItem implements AdditionalPropertiesInterface
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
     * The identifier of a resource.
     *
     * @var string
     */
    protected $resourceId;
    /**
     * The type of the resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The identifier of a resource.
     *
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }
    /**
     * The identifier of a resource.
     *
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * The type of the resource.
     *
     * @return string
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }
    /**
     * The type of the resource.
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType): self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['resourceId' => ['resource_id', 'getResourceId', 'setResourceId'], 'resourceType' => ['resource_type', 'getResourceType', 'setResourceType']];
    }
}