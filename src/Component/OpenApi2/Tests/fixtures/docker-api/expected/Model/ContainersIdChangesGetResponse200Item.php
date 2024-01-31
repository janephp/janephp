<?php

namespace Docker\Api\Model;

class ContainersIdChangesGetResponse200Item
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
     * Path to file that has changed
     *
     * @var string
     */
    protected $path;
    /**
     * Kind of change
     *
     * @var int
     */
    protected $kind;
    /**
     * Path to file that has changed
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * Path to file that has changed
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * Kind of change
     *
     * @return int
     */
    public function getKind() : int
    {
        return $this->kind;
    }
    /**
     * Kind of change
     *
     * @param int $kind
     *
     * @return self
     */
    public function setKind(int $kind) : self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
}