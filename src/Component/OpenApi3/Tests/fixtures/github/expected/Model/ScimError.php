<?php

namespace Github\Model;

class ScimError extends \ArrayObject
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
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentationUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $detail;
    /**
     * 
     *
     * @var int
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $scimType;
    /**
     * 
     *
     * @var string[]
     */
    protected $schemas;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentationUrl() : ?string
    {
        return $this->documentationUrl;
    }
    /**
     * 
     *
     * @param string|null $documentationUrl
     *
     * @return self
     */
    public function setDocumentationUrl(?string $documentationUrl) : self
    {
        $this->initialized['documentationUrl'] = true;
        $this->documentationUrl = $documentationUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDetail() : ?string
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param string|null $detail
     *
     * @return self
     */
    public function setDetail(?string $detail) : self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScimType() : ?string
    {
        return $this->scimType;
    }
    /**
     * 
     *
     * @param string|null $scimType
     *
     * @return self
     */
    public function setScimType(?string $scimType) : self
    {
        $this->initialized['scimType'] = true;
        $this->scimType = $scimType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * 
     *
     * @param string[] $schemas
     *
     * @return self
     */
    public function setSchemas(array $schemas) : self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;
        return $this;
    }
}