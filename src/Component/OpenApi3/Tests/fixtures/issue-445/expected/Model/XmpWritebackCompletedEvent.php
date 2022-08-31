<?php

namespace PicturePark\API\Model;

class XmpWritebackCompletedEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
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
    protected $outputDocId;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->timestamp = $timestamp;
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
    public function getOutputDocId() : ?string
    {
        return $this->outputDocId;
    }
    /**
     * 
     *
     * @param string|null $outputDocId
     *
     * @return self
     */
    public function setOutputDocId(?string $outputDocId) : self
    {
        $this->outputDocId = $outputDocId;
        return $this;
    }
}