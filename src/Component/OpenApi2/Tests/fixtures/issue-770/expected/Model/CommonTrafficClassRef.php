<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonTrafficClassRef
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
     * Identifier of the Traffic Class
     *
     * @var string
     */
    protected $id;
    /**
     * White list of the Traffic Class Profile. The multiple entries need to be separated by comma (,)
     *
     * @var string
     */
    protected $whitelists;
    /**
     * Identifier of the Traffic Class
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the Traffic Class
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
     * White list of the Traffic Class Profile. The multiple entries need to be separated by comma (,)
     *
     * @return string
     */
    public function getWhitelists(): string
    {
        return $this->whitelists;
    }
    /**
     * White list of the Traffic Class Profile. The multiple entries need to be separated by comma (,)
     *
     * @param string $whitelists
     *
     * @return self
     */
    public function setWhitelists(string $whitelists): self
    {
        $this->initialized['whitelists'] = true;
        $this->whitelists = $whitelists;
        return $this;
    }
}