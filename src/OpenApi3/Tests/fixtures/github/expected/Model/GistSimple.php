<?php

namespace Github\Model;

class GistSimple
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
    protected $forksUrl;
    /**
     * 
     *
     * @var string
     */
    protected $commitsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $gitPullUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gitPushUrl;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var GistSimpleFilesItem[]
     */
    protected $files;
    /**
     * 
     *
     * @var bool
     */
    protected $public;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
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
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $comments;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var string
     */
    protected $commentsUrl;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $owner;
    /**
     * 
     *
     * @var bool
     */
    protected $truncated;
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
    public function getForksUrl() : string
    {
        return $this->forksUrl;
    }
    /**
     * 
     *
     * @param string $forksUrl
     *
     * @return self
     */
    public function setForksUrl(string $forksUrl) : self
    {
        $this->forksUrl = $forksUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommitsUrl() : string
    {
        return $this->commitsUrl;
    }
    /**
     * 
     *
     * @param string $commitsUrl
     *
     * @return self
     */
    public function setCommitsUrl(string $commitsUrl) : self
    {
        $this->commitsUrl = $commitsUrl;
        return $this;
    }
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
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGitPullUrl() : string
    {
        return $this->gitPullUrl;
    }
    /**
     * 
     *
     * @param string $gitPullUrl
     *
     * @return self
     */
    public function setGitPullUrl(string $gitPullUrl) : self
    {
        $this->gitPullUrl = $gitPullUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGitPushUrl() : string
    {
        return $this->gitPushUrl;
    }
    /**
     * 
     *
     * @param string $gitPushUrl
     *
     * @return self
     */
    public function setGitPushUrl(string $gitPushUrl) : self
    {
        $this->gitPushUrl = $gitPushUrl;
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
     * @return GistSimpleFilesItem[]
     */
    public function getFiles() : \ArrayObject
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param GistSimpleFilesItem[] $files
     *
     * @return self
     */
    public function setFiles(\ArrayObject $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPublic() : bool
    {
        return $this->public;
    }
    /**
     * 
     *
     * @param bool $public
     *
     * @return self
     */
    public function setPublic(bool $public) : self
    {
        $this->public = $public;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
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
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getComments() : int
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param int $comments
     *
     * @return self
     */
    public function setComments(int $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommentsUrl() : string
    {
        return $this->commentsUrl;
    }
    /**
     * 
     *
     * @param string $commentsUrl
     *
     * @return self
     */
    public function setCommentsUrl(string $commentsUrl) : self
    {
        $this->commentsUrl = $commentsUrl;
        return $this;
    }
    /**
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getOwner() : ?SimpleUser
    {
        return $this->owner;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $owner
     *
     * @return self
     */
    public function setOwner(?SimpleUser $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTruncated() : bool
    {
        return $this->truncated;
    }
    /**
     * 
     *
     * @param bool $truncated
     *
     * @return self
     */
    public function setTruncated(bool $truncated) : self
    {
        $this->truncated = $truncated;
        return $this;
    }
}