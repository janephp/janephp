<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DisallowedResourceProblem
{
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
    protected $resourceId;
    /**
     * 
     *
     * @var string
     */
    protected $resourceType;
    /**
     * 
     *
     * @var string
     */
    protected $section;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $detail;
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
    public function getResourceId() : string
    {
        return $this->resourceId;
    }
    /**
     * 
     *
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId) : self
    {
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * 
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType) : self
    {
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSection() : string
    {
        return $this->section;
    }
    /**
     * 
     *
     * @param string $section
     *
     * @return self
     */
    public function setSection(string $section) : self
    {
        $this->section = $section;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDetail() : string
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
}