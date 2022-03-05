<?php

namespace Docker\Api\Model;

class BuildInfo
{
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
        $this->aux = $aux;
        return $this;
    }
}