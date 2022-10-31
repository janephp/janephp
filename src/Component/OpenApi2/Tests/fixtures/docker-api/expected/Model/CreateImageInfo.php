<?php

namespace Docker\Api\Model;

class CreateImageInfo
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
     * 
     *
     * @var string
     */
    protected $id;
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
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
        $this->initialized['error'] = true;
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
        $this->initialized['status'] = true;
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
        $this->initialized['progress'] = true;
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
        $this->initialized['progressDetail'] = true;
        $this->progressDetail = $progressDetail;
        return $this;
    }
}