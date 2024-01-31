<?php

namespace PicturePark\API\Model;

class ErrorResponse
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
     * Serialized PictureparkBusinessException.
     *
     * @var string|null
     */
    protected $exception;
    /**
     * Trace ID.
     *
     * @var string|null
     */
    protected $traceId;
    /**
     * Trace job ID.
     *
     * @var string|null
     */
    protected $traceJobId;
    /**
     * Serialized PictureparkBusinessException.
     *
     * @return string|null
     */
    public function getException() : ?string
    {
        return $this->exception;
    }
    /**
     * Serialized PictureparkBusinessException.
     *
     * @param string|null $exception
     *
     * @return self
     */
    public function setException(?string $exception) : self
    {
        $this->initialized['exception'] = true;
        $this->exception = $exception;
        return $this;
    }
    /**
     * Trace ID.
     *
     * @return string|null
     */
    public function getTraceId() : ?string
    {
        return $this->traceId;
    }
    /**
     * Trace ID.
     *
     * @param string|null $traceId
     *
     * @return self
     */
    public function setTraceId(?string $traceId) : self
    {
        $this->initialized['traceId'] = true;
        $this->traceId = $traceId;
        return $this;
    }
    /**
     * Trace job ID.
     *
     * @return string|null
     */
    public function getTraceJobId() : ?string
    {
        return $this->traceJobId;
    }
    /**
     * Trace job ID.
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId) : self
    {
        $this->initialized['traceJobId'] = true;
        $this->traceJobId = $traceJobId;
        return $this;
    }
}