<?php

namespace PicturePark\API\Model;

class ContentDownloadEvent
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
     * @var DownloadTrackingInfo[]|null
     */
    protected $downloadInfos;
    /**
     * 
     *
     * @var int
     */
    protected $fileSize;
    /**
     * 
     *
     * @var string|null
     */
    protected $shareToken;
    /**
     * 
     *
     * @var string|null
     */
    protected $range;
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
     * @return DownloadTrackingInfo[]|null
     */
    public function getDownloadInfos() : ?array
    {
        return $this->downloadInfos;
    }
    /**
     * 
     *
     * @param DownloadTrackingInfo[]|null $downloadInfos
     *
     * @return self
     */
    public function setDownloadInfos(?array $downloadInfos) : self
    {
        $this->downloadInfos = $downloadInfos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFileSize() : int
    {
        return $this->fileSize;
    }
    /**
     * 
     *
     * @param int $fileSize
     *
     * @return self
     */
    public function setFileSize(int $fileSize) : self
    {
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShareToken() : ?string
    {
        return $this->shareToken;
    }
    /**
     * 
     *
     * @param string|null $shareToken
     *
     * @return self
     */
    public function setShareToken(?string $shareToken) : self
    {
        $this->shareToken = $shareToken;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRange() : ?string
    {
        return $this->range;
    }
    /**
     * 
     *
     * @param string|null $range
     *
     * @return self
     */
    public function setRange(?string $range) : self
    {
        $this->range = $range;
        return $this;
    }
}