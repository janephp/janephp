<?php

namespace PicturePark\API\Model;

class MaximumTransferSizeException
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
     * @var int
     */
    protected $transferSize;
    /**
     * 
     *
     * @var int
     */
    protected $maximumTransferSize;
    /**
     * 
     *
     * @var string|null
     */
    protected $transferId;
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
     * @return int
     */
    public function getTransferSize() : int
    {
        return $this->transferSize;
    }
    /**
     * 
     *
     * @param int $transferSize
     *
     * @return self
     */
    public function setTransferSize(int $transferSize) : self
    {
        $this->transferSize = $transferSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaximumTransferSize() : int
    {
        return $this->maximumTransferSize;
    }
    /**
     * 
     *
     * @param int $maximumTransferSize
     *
     * @return self
     */
    public function setMaximumTransferSize(int $maximumTransferSize) : self
    {
        $this->maximumTransferSize = $maximumTransferSize;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTransferId() : ?string
    {
        return $this->transferId;
    }
    /**
     * 
     *
     * @param string|null $transferId
     *
     * @return self
     */
    public function setTransferId(?string $transferId) : self
    {
        $this->transferId = $transferId;
        return $this;
    }
}