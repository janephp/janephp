<?php

namespace PicturePark\API\Model;

class ContentDownloadLinkCreateRequest
{
    /**
     * List of content information to generate the download link
     *
     * @var ContentDownloadRequestItem[]
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
     * @return ContentDownloadRequestItem[]
     */
    public function getContents() : array
    {
        return $this->contents;
    }
    /**
     * List of content information to generate the download link
     *
     * @param ContentDownloadRequestItem[] $contents
     *
     * @return self
     */
    public function setContents(array $contents) : self
    {
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
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
}