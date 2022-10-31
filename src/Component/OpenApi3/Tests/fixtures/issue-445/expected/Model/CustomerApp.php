<?php

namespace PicturePark\API\Model;

class CustomerApp
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
     * @var string|null
     */
    protected $appId;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $name;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $icon;
    /**
     * 
     *
     * @return string|null
     */
    public function getAppId() : ?string
    {
        return $this->appId;
    }
    /**
     * 
     *
     * @param string|null $appId
     *
     * @return self
     */
    public function setAppId(?string $appId) : self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * 
     *
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon) : self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
}