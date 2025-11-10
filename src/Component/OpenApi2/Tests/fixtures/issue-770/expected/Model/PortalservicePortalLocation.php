<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalservicePortalLocation
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Portal location id
     *
     * @var string
     */
    protected $id;
    /**
     * Portal location name
     *
     * @var string
     */
    protected $name;
    /**
     * Portal location id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Portal location id
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
     * Portal location name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Portal location name
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
}