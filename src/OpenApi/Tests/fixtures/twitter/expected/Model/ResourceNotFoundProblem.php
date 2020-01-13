<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class ResourceNotFoundProblem
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
    protected $parameter;
    /**
     * Value will match the schema of the field.
     *
     * @var mixed
     */
    protected $value;
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
    public function getParameter() : string
    {
        return $this->parameter;
    }
    /**
     * 
     *
     * @param string $parameter
     *
     * @return self
     */
    public function setParameter(string $parameter) : self
    {
        $this->parameter = $parameter;
        return $this;
    }
    /**
     * Value will match the schema of the field.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Value will match the schema of the field.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->value = $value;
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