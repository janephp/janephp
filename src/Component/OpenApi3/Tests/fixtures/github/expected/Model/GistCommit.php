<?php

namespace Github\Model;

class GistCommit extends \ArrayObject
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
     * @var GistCommitUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var GistCommitChangeStatus
     */
    protected $changeStatus;
    /**
     * 
     *
     * @var \DateTime
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
        $this->initialized['url'] = true;
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
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return GistCommitUser|null
     */
    public function getUser() : ?GistCommitUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param GistCommitUser|null $user
     *
     * @return self
     */
    public function setUser(?GistCommitUser $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return GistCommitChangeStatus
     */
    public function getChangeStatus() : GistCommitChangeStatus
    {
        return $this->changeStatus;
    }
    /**
     * 
     *
     * @param GistCommitChangeStatus $changeStatus
     *
     * @return self
     */
    public function setChangeStatus(GistCommitChangeStatus $changeStatus) : self
    {
        $this->initialized['changeStatus'] = true;
        $this->changeStatus = $changeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCommittedAt() : \DateTime
    {
        return $this->committedAt;
    }
    /**
     * 
     *
     * @param \DateTime $committedAt
     *
     * @return self
     */
    public function setCommittedAt(\DateTime $committedAt) : self
    {
        $this->initialized['committedAt'] = true;
        $this->committedAt = $committedAt;
        return $this;
    }
}