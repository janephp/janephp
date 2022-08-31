<?php

namespace PicturePark\API\Model;

class ContentDetailViewEvent extends ApplicationEvent
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
     * @var string[]|null
     */
    protected $contentIds;
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
     * @return string[]|null
     */
    public function getContentIds() : ?array
    {
        return $this->contentIds;
    }
    /**
     * 
     *
     * @param string[]|null $contentIds
     *
     * @return self
     */
    public function setContentIds(?array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
}