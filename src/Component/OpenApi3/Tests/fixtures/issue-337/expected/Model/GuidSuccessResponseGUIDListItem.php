<?php

namespace CreditSafe\API\Model;

class GuidSuccessResponseGUIDListItem
{
    /**
     * 
     *
     * @var string
     */
    protected $friendlyName;
    /**
     * 
     *
     * @var string
     */
    protected $gUID;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $serviceLine;
    /**
     * 
     *
     * @return string
     */
    public function getFriendlyName() : string
    {
        return $this->friendlyName;
    }
    /**
     * 
     *
     * @param string $friendlyName
     *
     * @return self
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->friendlyName = $friendlyName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGUID() : string
    {
        return $this->gUID;
    }
    /**
     * 
     *
     * @param string $gUID
     *
     * @return self
     */
    public function setGUID(string $gUID) : self
    {
        $this->gUID = $gUID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServiceLine() : string
    {
        return $this->serviceLine;
    }
    /**
     * 
     *
     * @param string $serviceLine
     *
     * @return self
     */
    public function setServiceLine(string $serviceLine) : self
    {
        $this->serviceLine = $serviceLine;
        return $this;
    }
}