<?php

namespace PicturePark\API\Model;

class DownloadLink
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
        $this->initialized['downloadToken'] = true;
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
        $this->initialized['downloadUrl'] = true;
        $this->downloadUrl = $downloadUrl;
        return $this;
    }
}