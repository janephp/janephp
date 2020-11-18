<?php

namespace PicturePark\API\Model;

class DownloadLink
{
    /**
     * Token of the download, used to generate the url.
     *
     * @var string
     */
    protected $downloadToken;
    /**
     * Url of the download link.
     *
     * @var string
     */
    protected $downloadUrl;
    /**
     * Token of the download, used to generate the url.
     *
     * @return string
     */
    public function getDownloadToken() : string
    {
        return $this->downloadToken;
    }
    /**
     * Token of the download, used to generate the url.
     *
     * @param string $downloadToken
     *
     * @return self
     */
    public function setDownloadToken(string $downloadToken) : self
    {
        $this->downloadToken = $downloadToken;
        return $this;
    }
    /**
     * Url of the download link.
     *
     * @return string
     */
    public function getDownloadUrl() : string
    {
        return $this->downloadUrl;
    }
    /**
     * Url of the download link.
     *
     * @param string $downloadUrl
     *
     * @return self
     */
    public function setDownloadUrl(string $downloadUrl) : self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }
}