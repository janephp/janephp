<?php

namespace PicturePark\API\Model;

class ContentFileReplaceTypeMismatchException
{
    /**
     * 
     *
     * @var string
     */
    protected $traceLevel;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceJobId;
    /**
     * 
     *
     * @var int
     */
    protected $httpStatusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $exceptionMessage;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerAlias;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * Content types
     *
     * @var string
     */
    protected $originalContentType;
    /**
     * Content types
     *
     * @var string
     */
    protected $newContentType;
    /**
     * 
     *
     * @return string
     */
    public function getTraceLevel() : string
    {
        return $this->traceLevel;
    }
    /**
     * 
     *
     * @param string $traceLevel
     *
     * @return self
     */
    public function setTraceLevel(string $traceLevel) : self
    {
        $this->traceLevel = $traceLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceId() : ?string
    {
        return $this->traceId;
    }
    /**
     * 
     *
     * @param string|null $traceId
     *
     * @return self
     */
    public function setTraceId(?string $traceId) : self
    {
        $this->traceId = $traceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceJobId() : ?string
    {
        return $this->traceJobId;
    }
    /**
     * 
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId) : self
    {
        $this->traceJobId = $traceJobId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHttpStatusCode() : int
    {
        return $this->httpStatusCode;
    }
    /**
     * 
     *
     * @param int $httpStatusCode
     *
     * @return self
     */
    public function setHttpStatusCode(int $httpStatusCode) : self
    {
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExceptionMessage() : ?string
    {
        return $this->exceptionMessage;
    }
    /**
     * 
     *
     * @param string|null $exceptionMessage
     *
     * @return self
     */
    public function setExceptionMessage(?string $exceptionMessage) : self
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId() : ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerAlias() : ?string
    {
        return $this->customerAlias;
    }
    /**
     * 
     *
     * @param string|null $customerAlias
     *
     * @return self
     */
    public function setCustomerAlias(?string $customerAlias) : self
    {
        $this->customerAlias = $customerAlias;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContentId() : ?string
    {
        return $this->contentId;
    }
    /**
     * 
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * Content types
     *
     * @return string
     */
    public function getOriginalContentType() : string
    {
        return $this->originalContentType;
    }
    /**
     * Content types
     *
     * @param string $originalContentType
     *
     * @return self
     */
    public function setOriginalContentType(string $originalContentType) : self
    {
        $this->originalContentType = $originalContentType;
        return $this;
    }
    /**
     * Content types
     *
     * @return string
     */
    public function getNewContentType() : string
    {
        return $this->newContentType;
    }
    /**
     * Content types
     *
     * @param string $newContentType
     *
     * @return self
     */
    public function setNewContentType(string $newContentType) : self
    {
        $this->newContentType = $newContentType;
        return $this;
    }
}