<?php

namespace Docker\Api\Model;

class ContainersIdWaitPostResponse200
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
     * Exit code of the container
     *
     * @var int
     */
    protected $statusCode;
    /**
     * container waiting error, if any
     *
     * @var ContainersIdWaitPostResponse200Error
     */
    protected $error;
    /**
     * Exit code of the container
     *
     * @return int
     */
    public function getStatusCode() : int
    {
        return $this->statusCode;
    }
    /**
     * Exit code of the container
     *
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode(int $statusCode) : self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * container waiting error, if any
     *
     * @return ContainersIdWaitPostResponse200Error
     */
    public function getError() : ContainersIdWaitPostResponse200Error
    {
        return $this->error;
    }
    /**
     * container waiting error, if any
     *
     * @param ContainersIdWaitPostResponse200Error $error
     *
     * @return self
     */
    public function setError(ContainersIdWaitPostResponse200Error $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}