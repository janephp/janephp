<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcApplication
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
     * Identifier of the Application Category
     *
     * @var string
     */
    protected $catId;
    /**
     * Identifier of the Application
     *
     * @var string
     */
    protected $appId;
    /**
     * Name of the Application
     *
     * @var string
     */
    protected $name;
    /**
     * Identifier of the Application Category
     *
     * @return string
     */
    public function getCatId(): string
    {
        return $this->catId;
    }
    /**
     * Identifier of the Application Category
     *
     * @param string $catId
     *
     * @return self
     */
    public function setCatId(string $catId): self
    {
        $this->initialized['catId'] = true;
        $this->catId = $catId;
        return $this;
    }
    /**
     * Identifier of the Application
     *
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }
    /**
     * Identifier of the Application
     *
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * Name of the Application
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the Application
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