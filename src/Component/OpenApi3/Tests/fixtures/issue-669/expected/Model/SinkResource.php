<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SinkResource implements AdditionalPropertiesInterface
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
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    protected $urn;
    /**
     * resource name
     *
     * @var string
     */
    protected $name;
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
     * resource name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * resource name
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
    public function definedProperties(): array
    {
        return ['urn' => ['urn', 'getUrn', 'setUrn'], 'name' => ['name', 'getName', 'setName']];
    }
}