<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class TimeEntryExternalReference
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $groupId;
    /**
     * 
     *
     * @var string
     */
    protected $permalink;
    /**
     * 
     *
     * @var string
     */
    protected $service;
    /**
     * 
     *
     * @var string
     */
    protected $serviceIconUrl;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * 
     *
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermalink() : string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * 
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service) : self
    {
        $this->service = $service;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServiceIconUrl() : string
    {
        return $this->serviceIconUrl;
    }
    /**
     * 
     *
     * @param string $serviceIconUrl
     *
     * @return self
     */
    public function setServiceIconUrl(string $serviceIconUrl) : self
    {
        $this->serviceIconUrl = $serviceIconUrl;
        return $this;
    }
}