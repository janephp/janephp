<?php

namespace Docker\Api\Model;

class ContainersIdChangesGetResponse200Item
{
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
        $this->kind = $kind;
        return $this;
    }
}