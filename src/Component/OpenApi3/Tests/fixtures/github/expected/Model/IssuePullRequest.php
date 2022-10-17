<?php

namespace Github\Model;

class IssuePullRequest extends \ArrayObject
{
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $mergedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $diffUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $patchUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getMergedAt() : ?\DateTime
    {
        return $this->mergedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $mergedAt
     *
     * @return self
     */
    public function setMergedAt(?\DateTime $mergedAt) : self
    {
        $this->mergedAt = $mergedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiffUrl() : ?string
    {
        return $this->diffUrl;
    }
    /**
     * 
     *
     * @param string|null $diffUrl
     *
     * @return self
     */
    public function setDiffUrl(?string $diffUrl) : self
    {
        $this->diffUrl = $diffUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHtmlUrl() : ?string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string|null $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(?string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPatchUrl() : ?string
    {
        return $this->patchUrl;
    }
    /**
     * 
     *
     * @param string|null $patchUrl
     *
     * @return self
     */
    public function setPatchUrl(?string $patchUrl) : self
    {
        $this->patchUrl = $patchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}