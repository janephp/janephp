<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcBase implements AdditionalPropertiesInterface
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
     * A unique ID that can be used to identify and reference the VPC.
     *
     * @var string
     */
    protected $id;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    protected $urn;
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A unique ID that can be used to identify and reference the VPC.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference the VPC.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     * A time value given in ISO8601 combined date and time format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'urn' => ['urn', 'getUrn', 'setUrn'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt']];
    }
}