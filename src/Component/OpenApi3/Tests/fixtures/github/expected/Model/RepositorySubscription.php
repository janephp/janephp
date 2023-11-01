<?php

namespace Github\Model;

class RepositorySubscription extends \ArrayObject
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
     * Determines if notifications should be received from this repository.
     *
     * @var bool
     */
    protected $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
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
     * @var \DateTime
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
    protected $repositoryUrl;
    /**
     * Determines if notifications should be received from this repository.
     *
     * @return bool
     */
    public function getSubscribed() : bool
    {
        return $this->subscribed;
    }
    /**
     * Determines if notifications should be received from this repository.
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
     * Determines if all notifications should be blocked from this repository.
     *
     * @return bool
     */
    public function getIgnored() : bool
    {
        return $this->ignored;
    }
    /**
     * Determines if all notifications should be blocked from this repository.
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
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
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