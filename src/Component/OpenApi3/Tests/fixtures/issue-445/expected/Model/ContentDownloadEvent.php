<?php

namespace PicturePark\API\Model;

class ContentDownloadEvent extends ApplicationEvent
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
        $this->initialized['downloadInfos'] = true;
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
        $this->initialized['fileSize'] = true;
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
        $this->initialized['shareToken'] = true;
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
        $this->initialized['range'] = true;
        $this->range = $range;
        return $this;
    }
}