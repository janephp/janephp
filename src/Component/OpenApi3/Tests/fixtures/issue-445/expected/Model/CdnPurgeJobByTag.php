<?php

namespace PicturePark\API\Model;

class CdnPurgeJobByTag
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
     * The tag that should be purged.
     *
     * @var string
     */
    protected $tag;
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
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->success = $success;
        return $this;
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
     *
     * @return self
     */
    public function setRetriesLeft(int $retriesLeft) : self
    {
        $this->retriesLeft = $retriesLeft;
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
     * The tag that should be purged.
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * The tag that should be purged.
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->tag = $tag;
        return $this;
    }
}