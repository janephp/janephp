<?php

namespace Docker\Api\Model;

class PushImageInfo
{
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $progress;
    /**
     * 
     *
     * @var ProgressDetail
     */
    protected $progressDetail;
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProgress() : string
    {
        return $this->progress;
    }
    /**
     * 
     *
     * @param string $progress
     *
     * @return self
     */
    public function setProgress(string $progress) : self
    {
        $this->progress = $progress;
        return $this;
    }
    /**
     * 
     *
     * @return ProgressDetail
     */
    public function getProgressDetail() : ProgressDetail
    {
        return $this->progressDetail;
    }
    /**
     * 
     *
     * @param ProgressDetail $progressDetail
     *
     * @return self
     */
    public function setProgressDetail(ProgressDetail $progressDetail) : self
    {
        $this->progressDetail = $progressDetail;
        return $this;
    }
}