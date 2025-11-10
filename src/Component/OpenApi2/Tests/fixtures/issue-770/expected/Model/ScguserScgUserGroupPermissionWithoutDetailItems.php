<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupPermissionWithoutDetailItems
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
     * Resource type
     *
     * @var string
     */
    protected $resource;
    /**
     * Access level
     *
     * @var string
     */
    protected $access;
    /**
     * Resource display name
     *
     * @var string
     */
    protected $display;
    /**
     * Resource id list
     *
     * @var list<string>
     */
    protected $ids;
    /**
     * Resource type
     *
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }
    /**
     * Resource type
     *
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
     * Access level
     *
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }
    /**
     * Access level
     *
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
     * Resource display name
     *
     * @return string
     */
    public function getDisplay(): string
    {
        return $this->display;
    }
    /**
     * Resource display name
     *
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
    /**
     * Resource id list
     *
     * @return list<string>
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * Resource id list
     *
     * @param list<string> $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
}