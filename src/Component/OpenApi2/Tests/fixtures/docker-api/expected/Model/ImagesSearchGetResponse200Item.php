<?php

namespace Docker\Api\Model;

class ImagesSearchGetResponse200Item
{
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
        $this->starCount = $starCount;
        return $this;
    }
}