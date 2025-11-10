<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupPermissionItemsItem
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
     * @var string
     */
    protected $resource;
    /**
     * @var string
     */
    protected $access;
    /**
     * @var string
     */
    protected $display;
    /**
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }
    /**
     * @param string $resource
     *
     * @return self
     */
    public function setResource(string $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }
    /**
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access): self
    {
        $this->initialized['access'] = true;
        $this->access = $access;
        return $this;
    }
    /**
     * @return string
     */
    public function getDisplay(): string
    {
        return $this->display;
    }
    /**
     * @param string $display
     *
     * @return self
     */
    public function setDisplay(string $display): self
    {
        $this->initialized['display'] = true;
        $this->display = $display;
        return $this;
    }
}