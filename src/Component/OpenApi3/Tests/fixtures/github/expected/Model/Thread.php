<?php

namespace Github\Model;

class Thread extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * 
     *
     * @var ThreadSubject
     */
    protected $subject;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @var bool
     */
    protected $unread;
    /**
     * 
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastReadAt;
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
    protected $subscriptionUrl;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getRepository() : MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $repository
     *
     * @return self
     */
    public function setRepository(MinimalRepository $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return ThreadSubject
     */
    public function getSubject() : ThreadSubject
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param ThreadSubject $subject
     *
     * @return self
     */
    public function setSubject(ThreadSubject $subject) : self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUnread() : bool
    {
        return $this->unread;
    }
    /**
     * 
     *
     * @param bool $unread
     *
     * @return self
     */
    public function setUnread(bool $unread) : self
    {
        $this->unread = $unread;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastReadAt() : ?string
    {
        return $this->lastReadAt;
    }
    /**
     * 
     *
     * @param string|null $lastReadAt
     *
     * @return self
     */
    public function setLastReadAt(?string $lastReadAt) : self
    {
        $this->lastReadAt = $lastReadAt;
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
    public function getSubscriptionUrl() : string
    {
        return $this->subscriptionUrl;
    }
    /**
     * 
     *
     * @param string $subscriptionUrl
     *
     * @return self
     */
    public function setSubscriptionUrl(string $subscriptionUrl) : self
    {
        $this->subscriptionUrl = $subscriptionUrl;
        return $this;
    }
}