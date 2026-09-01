<?php

namespace PicturePark\API\Model;

class DownloadLink
{
    /**
     * Token of the download, used to generate the url.
     *
     * @var string
     */
    public string $downloadToken;
    /**
     * Url of the download link.
     *
     * @var string
     */
    public string $downloadUrl;
}