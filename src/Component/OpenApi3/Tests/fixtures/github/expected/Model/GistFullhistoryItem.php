<?php

namespace Github\Model;

class GistFullhistoryItem
{
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
    protected $version;
    /**
     * 
     *
     * @var GistFullhistoryItemUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var GistFullhistoryItemChangeStatus
     */
    protected $changeStatus;
    /**
     * 
     *
     * @var string
     */
    protected $committedAt;
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
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return GistFullhistoryItemUser|null
     */
    public function getUser() : ?GistFullhistoryItemUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param GistFullhistoryItemUser|null $user
     *
     * @return self
     */
    public function setUser(?GistFullhistoryItemUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return GistFullhistoryItemChangeStatus
     */
    public function getChangeStatus() : GistFullhistoryItemChangeStatus
    {
        return $this->changeStatus;
    }
    /**
     * 
     *
     * @param GistFullhistoryItemChangeStatus $changeStatus
     *
     * @return self
     */
    public function setChangeStatus(GistFullhistoryItemChangeStatus $changeStatus) : self
    {
        $this->changeStatus = $changeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommittedAt() : string
    {
        return $this->committedAt;
    }
    /**
     * 
     *
     * @param string $committedAt
     *
     * @return self
     */
    public function setCommittedAt(string $committedAt) : self
    {
        $this->committedAt = $committedAt;
        return $this;
    }
}