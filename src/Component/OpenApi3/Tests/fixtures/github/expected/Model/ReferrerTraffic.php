<?php

namespace Github\Model;

class ReferrerTraffic extends \ArrayObject
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
     * @var string
     */
    protected $referrer;
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var int
     */
    protected $uniques;
    /**
     * 
     *
     * @return string
     */
    public function getReferrer() : string
    {
        return $this->referrer;
    }
    /**
     * 
     *
     * @param string $referrer
     *
     * @return self
     */
    public function setReferrer(string $referrer) : self
    {
        $this->initialized['referrer'] = true;
        $this->referrer = $referrer;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUniques() : int
    {
        return $this->uniques;
    }
    /**
     * 
     *
     * @param int $uniques
     *
     * @return self
     */
    public function setUniques(int $uniques) : self
    {
        $this->initialized['uniques'] = true;
        $this->uniques = $uniques;
        return $this;
    }
}