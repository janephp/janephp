<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedResource implements AdditionalPropertiesInterface
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
     * The unique identifier for the resource associated with the Droplet.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the resource associated with the Droplet.
     *
     * @var string
     */
    protected $name;
    /**
     * The cost of the resource in USD per month if the resource is retained after the Droplet is destroyed.
     *
     * @var string
     */
    protected $cost;
    /**
     * The unique identifier for the resource associated with the Droplet.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier for the resource associated with the Droplet.
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
     * The name of the resource associated with the Droplet.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the resource associated with the Droplet.
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
     * The cost of the resource in USD per month if the resource is retained after the Droplet is destroyed.
     *
     * @return string
     */
    public function getCost(): string
    {
        return $this->cost;
    }
    /**
     * The cost of the resource in USD per month if the resource is retained after the Droplet is destroyed.
     *
     * @param string $cost
     *
     * @return self
     */
    public function setCost(string $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'cost' => ['cost', 'getCost', 'setCost']];
    }
}