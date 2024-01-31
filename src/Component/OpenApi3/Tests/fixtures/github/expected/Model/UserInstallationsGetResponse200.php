<?php

namespace Github\Model;

class UserInstallationsGetResponse200 extends \ArrayObject
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
        $this->initialized['totalCount'] = true;
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
        $this->initialized['installations'] = true;
        $this->installations = $installations;
        return $this;
    }
}