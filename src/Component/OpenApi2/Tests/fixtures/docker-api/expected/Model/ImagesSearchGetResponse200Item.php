<?php

namespace Docker\Api\Model;

class ImagesSearchGetResponse200Item
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $isOfficial;
    /**
     * 
     *
     * @var bool
     */
    protected $isAutomated;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $starCount;
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOfficial() : bool
    {
        return $this->isOfficial;
    }
    /**
     * 
     *
     * @param bool $isOfficial
     *
     * @return self
     */
    public function setIsOfficial(bool $isOfficial) : self
    {
        $this->initialized['isOfficial'] = true;
        $this->isOfficial = $isOfficial;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAutomated() : bool
    {
        return $this->isAutomated;
    }
    /**
     * 
     *
     * @param bool $isAutomated
     *
     * @return self
     */
    public function setIsAutomated(bool $isAutomated) : self
    {
        $this->initialized['isAutomated'] = true;
        $this->isAutomated = $isAutomated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStarCount() : int
    {
        return $this->starCount;
    }
    /**
     * 
     *
     * @param int $starCount
     *
     * @return self
     */
    public function setStarCount(int $starCount) : self
    {
        $this->initialized['starCount'] = true;
        $this->starCount = $starCount;
        return $this;
    }
}