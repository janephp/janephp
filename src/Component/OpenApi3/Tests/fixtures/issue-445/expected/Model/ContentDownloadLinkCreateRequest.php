<?php

namespace PicturePark\API\Model;

class ContentDownloadLinkCreateRequest
{
    /**
     * List of content information to generate the download link
     *
     * @var list<ContentDownloadRequestItem>
     */
    public array $contents;
    /**
     * Indicates if a progress message shall be shown to the user, notifying once the download is completed.
     *
     * @var bool
     */
    public bool $notifyProgress;
}