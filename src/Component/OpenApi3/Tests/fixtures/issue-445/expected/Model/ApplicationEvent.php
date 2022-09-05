<?php

namespace PicturePark\API\Model;

class ApplicationEvent
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
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
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