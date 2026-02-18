<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanExternalDpskAuthService
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
     * Identifier of the authentication service. At least one ID or name is required in the request.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the authentication service. At least one ID or name is required in the request.
     *
     * @var string
     */
    protected $name;
    /**
     * Identifier of the authentication service. At least one ID or name is required in the request.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the authentication service. At least one ID or name is required in the request.
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
     * Name of the authentication service. At least one ID or name is required in the request.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the authentication service. At least one ID or name is required in the request.
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