<?php

namespace PicturePark\API\Model;

class ContentDownloadLinkCreateRequest
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
     * List of content information to generate the download link
     *
     * @var list<ContentDownloadRequestItem>
     */
    protected $contents;
    /**
     * Indicates if a progress message shall be shown to the user, notifying once the download is completed.
     *
     * @var bool
     */
    protected $notifyProgress;
    /**
     * List of content information to generate the download link
     *
     * @return list<ContentDownloadRequestItem>
     */
    public function getContents() : array
    {
        return $this->contents;
    }
    /**
     * List of content information to generate the download link
     *
     * @param list<ContentDownloadRequestItem> $contents
     *
     * @return self
     */
    public function setContents(array $contents) : self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;
        return $this;
    }
    /**
     * Indicates if a progress message shall be shown to the user, notifying once the download is completed.
     *
     * @return bool
     */
    public function getNotifyProgress() : bool
    {
        return $this->notifyProgress;
    }
    /**
     * Indicates if a progress message shall be shown to the user, notifying once the download is completed.
     *
     * @param bool $notifyProgress
     *
     * @return self
     */
    public function setNotifyProgress(bool $notifyProgress) : self
    {
        $this->initialized['notifyProgress'] = true;
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
}