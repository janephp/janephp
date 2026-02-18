<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonQueryCriteriaSortInfo
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
    protected $sortColumn;
    /**
     * @var string
     */
    protected $dir;
    /**
     * @return string
     */
    public function getSortColumn(): string
    {
        return $this->sortColumn;
    }
    /**
     * @param string $sortColumn
     *
     * @return self
     */
    public function setSortColumn(string $sortColumn): self
    {
        $this->initialized['sortColumn'] = true;
        $this->sortColumn = $sortColumn;
        return $this;
    }
    /**
     * @return string
     */
    public function getDir(): string
    {
        return $this->dir;
    }
    /**
     * @param string $dir
     *
     * @return self
     */
    public function setDir(string $dir): self
    {
        $this->initialized['dir'] = true;
        $this->dir = $dir;
        return $this;
    }
}