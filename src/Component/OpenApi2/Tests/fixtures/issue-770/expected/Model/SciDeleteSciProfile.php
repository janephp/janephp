<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SciDeleteSciProfile
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
     * UUID of the SCI profile for SZ/SCI interface
     *
     * @var string
     */
    protected $id;
    /**
     * UUID of the SCI profile for SZ/SCI interface
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * UUID of the SCI profile for SZ/SCI interface
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
}