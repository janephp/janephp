<?php

namespace Docker\Api\Model;

class NetworksCreatePostResponse201
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the created network.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $warning;
    /**
     * The ID of the created network.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The ID of the created network.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWarning() : string
    {
        return $this->warning;
    }
    /**
     * 
     *
     * @param string $warning
     *
     * @return self
     */
    public function setWarning(string $warning) : self
    {
        $this->initialized['warning'] = true;
        $this->warning = $warning;
        return $this;
    }
}