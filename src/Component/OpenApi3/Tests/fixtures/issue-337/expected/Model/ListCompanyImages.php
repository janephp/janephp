<?php

namespace CreditSafe\API\Model;

class ListCompanyImages extends \ArrayObject
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
     * @var int
     */
    protected $totalSize;
    /**
     * 
     *
     * @var ListCompanyImagesDataItem[]
     */
    protected $data;
    /**
     * 
     *
     * @return int
     */
    public function getTotalSize() : int
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize) : self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return ListCompanyImagesDataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ListCompanyImagesDataItem[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}