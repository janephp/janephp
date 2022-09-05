<?php

namespace PicturePark\API\Model;

class CdnPurgeJobBase
{
    /**
     * Indicates if the operation was performed successfully.
     *
     * @var bool
     */
    protected $success;
    /**
     * Number of retries left until the operation is considered as failed.
     *
     * @var int
     */
    protected $retriesLeft;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Indicates if the operation was performed successfully.
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * Indicates if the operation was performed successfully.
     *
     * @param bool $success
     */
    public function setSuccess(bool $success)
    {
        $this->success = $success;
    }
    /**
     * Number of retries left until the operation is considered as failed.
     *
     * @return int
     */
    public function getRetriesLeft() : int
    {
        return $this->retriesLeft;
    }
    /**
     * Number of retries left until the operation is considered as failed.
     *
     * @param int $retriesLeft
     */
    public function setRetriesLeft(int $retriesLeft)
    {
        $this->retriesLeft = $retriesLeft;
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
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;
    }
}