<?php

namespace Github\Model;

class OrgsOrgInstallationsGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var Installation[]
     */
    protected $installations;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return Installation[]
     */
    public function getInstallations() : array
    {
        return $this->installations;
    }
    /**
     * 
     *
     * @param Installation[] $installations
     *
     * @return self
     */
    public function setInstallations(array $installations) : self
    {
        $this->installations = $installations;
        return $this;
    }
}