<?php

namespace Github\Model;

class FileCommitContent extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gitUrl;
    /**
     * 
     *
     * @var string
     */
    protected $downloadUrl;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var FileCommitContentLinks
     */
    protected $links;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->sha = $sha;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGitUrl() : string
    {
        return $this->gitUrl;
    }
    /**
     * 
     *
     * @param string $gitUrl
     *
     * @return self
     */
    public function setGitUrl(string $gitUrl) : self
    {
        $this->gitUrl = $gitUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDownloadUrl() : string
    {
        return $this->downloadUrl;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return FileCommitContentLinks
     */
    public function getLinks() : FileCommitContentLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param FileCommitContentLinks $links
     *
     * @return self
     */
    public function setLinks(FileCommitContentLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}