<?php

namespace Docker\Api\Model;

class BuildInfo
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $stream;
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @var ErrorDetail
     */
    protected $errorDetail;
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
     * Image ID or Digest
     *
     * @var ImageID
     */
    protected $aux;
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
    public function getStream() : string
    {
        return $this->stream;
    }
    /**
     * 
     *
     * @param string $stream
     *
     * @return self
     */
    public function setStream(string $stream) : self
    {
        $this->initialized['stream'] = true;
        $this->stream = $stream;
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
     * @return ErrorDetail
     */
    public function getErrorDetail() : ErrorDetail
    {
        return $this->errorDetail;
    }
    /**
     * 
     *
     * @param ErrorDetail $errorDetail
     *
     * @return self
     */
    public function setErrorDetail(ErrorDetail $errorDetail) : self
    {
        $this->initialized['errorDetail'] = true;
        $this->errorDetail = $errorDetail;
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
    /**
     * Image ID or Digest
     *
     * @return ImageID
     */
    public function getAux() : ImageID
    {
        return $this->aux;
    }
    /**
     * Image ID or Digest
     *
     * @param ImageID $aux
     *
     * @return self
     */
    public function setAux(ImageID $aux) : self
    {
        $this->initialized['aux'] = true;
        $this->aux = $aux;
        return $this;
    }
}