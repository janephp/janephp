<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcMember implements AdditionalPropertiesInterface
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
     * The name of the resource.
     *
     * @var string
     */
    protected $name;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    protected $urn;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the resource was created.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The name of the resource.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the resource.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @return string
     */
    public function getUrn(): string
    {
        return $this->urn;
    }
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @param string $urn
     *
     * @return self
     */
    public function setUrn(string $urn): self
    {
        $this->initialized['urn'] = true;
        $this->urn = $urn;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the resource was created.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the resource was created.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'urn' => ['urn', 'getUrn', 'setUrn'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt']];
    }
}