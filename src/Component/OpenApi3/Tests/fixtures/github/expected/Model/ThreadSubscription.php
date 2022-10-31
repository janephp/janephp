<?php

namespace Github\Model;

class ThreadSubscription extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var bool
     */
    protected $subscribed;
    /**
     * 
     *
     * @var bool
     */
    protected $ignored;
    /**
     * 
     *
     * @var string|null
     */
    protected $reason;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
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
    protected $threadUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * 
     *
     * @return bool
     */
    public function getSubscribed() : bool
    {
        return $this->subscribed;
    }
    /**
     * 
     *
     * @param bool $subscribed
     *
     * @return self
     */
    public function setSubscribed(bool $subscribed) : self
    {
        $this->initialized['subscribed'] = true;
        $this->subscribed = $subscribed;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIgnored() : bool
    {
        return $this->ignored;
    }
    /**
     * 
     *
     * @param bool $ignored
     *
     * @return self
     */
    public function setIgnored(bool $ignored) : self
    {
        $this->initialized['ignored'] = true;
        $this->ignored = $ignored;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReason() : ?string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
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
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThreadUrl() : string
    {
        return $this->threadUrl;
    }
    /**
     * 
     *
     * @param string $threadUrl
     *
     * @return self
     */
    public function setThreadUrl(string $threadUrl) : self
    {
        $this->initialized['threadUrl'] = true;
        $this->threadUrl = $threadUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositoryUrl() : string
    {
        return $this->repositoryUrl;
    }
    /**
     * 
     *
     * @param string $repositoryUrl
     *
     * @return self
     */
    public function setRepositoryUrl(string $repositoryUrl) : self
    {
        $this->initialized['repositoryUrl'] = true;
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }
}