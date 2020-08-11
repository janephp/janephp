<?php

namespace Github\Model;

class UserSearchResultItem
{
    /**
     * 
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var int
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
    protected $avatarUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $gravatarId;
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
    protected $followersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $organizationsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $reposUrl;
    /**
     * 
     *
     * @var string
     */
    protected $receivedEventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var string
     */
    protected $followingUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gistsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $starredUrl;
    /**
     * 
     *
     * @var string
     */
    protected $eventsUrl;
    /**
     * 
     *
     * @var int
     */
    protected $publicRepos;
    /**
     * 
     *
     * @var int
     */
    protected $publicGists;
    /**
     * 
     *
     * @var int
     */
    protected $followers;
    /**
     * 
     *
     * @var int
     */
    protected $following;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $bio;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $location;
    /**
     * 
     *
     * @var bool
     */
    protected $siteAdmin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hireable;
    /**
     * 
     *
     * @var SearchResultTextMatchesItem[]
     */
    protected $textMatches;
    /**
     * 
     *
     * @var string|null
     */
    protected $blog;
    /**
     * 
     *
     * @var string|null
     */
    protected $company;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $suspendedAt;
    /**
     * 
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
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
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGravatarId() : ?string
    {
        return $this->gravatarId;
    }
    /**
     * 
     *
     * @param string|null $gravatarId
     *
     * @return self
     */
    public function setGravatarId(?string $gravatarId) : self
    {
        $this->gravatarId = $gravatarId;
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
    public function getFollowersUrl() : string
    {
        return $this->followersUrl;
    }
    /**
     * 
     *
     * @param string $followersUrl
     *
     * @return self
     */
    public function setFollowersUrl(string $followersUrl) : self
    {
        $this->followersUrl = $followersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubscriptionsUrl() : string
    {
        return $this->subscriptionsUrl;
    }
    /**
     * 
     *
     * @param string $subscriptionsUrl
     *
     * @return self
     */
    public function setSubscriptionsUrl(string $subscriptionsUrl) : self
    {
        $this->subscriptionsUrl = $subscriptionsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationsUrl() : string
    {
        return $this->organizationsUrl;
    }
    /**
     * 
     *
     * @param string $organizationsUrl
     *
     * @return self
     */
    public function setOrganizationsUrl(string $organizationsUrl) : self
    {
        $this->organizationsUrl = $organizationsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReposUrl() : string
    {
        return $this->reposUrl;
    }
    /**
     * 
     *
     * @param string $reposUrl
     *
     * @return self
     */
    public function setReposUrl(string $reposUrl) : self
    {
        $this->reposUrl = $reposUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReceivedEventsUrl() : string
    {
        return $this->receivedEventsUrl;
    }
    /**
     * 
     *
     * @param string $receivedEventsUrl
     *
     * @return self
     */
    public function setReceivedEventsUrl(string $receivedEventsUrl) : self
    {
        $this->receivedEventsUrl = $receivedEventsUrl;
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
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFollowingUrl() : string
    {
        return $this->followingUrl;
    }
    /**
     * 
     *
     * @param string $followingUrl
     *
     * @return self
     */
    public function setFollowingUrl(string $followingUrl) : self
    {
        $this->followingUrl = $followingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGistsUrl() : string
    {
        return $this->gistsUrl;
    }
    /**
     * 
     *
     * @param string $gistsUrl
     *
     * @return self
     */
    public function setGistsUrl(string $gistsUrl) : self
    {
        $this->gistsUrl = $gistsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStarredUrl() : string
    {
        return $this->starredUrl;
    }
    /**
     * 
     *
     * @param string $starredUrl
     *
     * @return self
     */
    public function setStarredUrl(string $starredUrl) : self
    {
        $this->starredUrl = $starredUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventsUrl() : string
    {
        return $this->eventsUrl;
    }
    /**
     * 
     *
     * @param string $eventsUrl
     *
     * @return self
     */
    public function setEventsUrl(string $eventsUrl) : self
    {
        $this->eventsUrl = $eventsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPublicRepos() : int
    {
        return $this->publicRepos;
    }
    /**
     * 
     *
     * @param int $publicRepos
     *
     * @return self
     */
    public function setPublicRepos(int $publicRepos) : self
    {
        $this->publicRepos = $publicRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPublicGists() : int
    {
        return $this->publicGists;
    }
    /**
     * 
     *
     * @param int $publicGists
     *
     * @return self
     */
    public function setPublicGists(int $publicGists) : self
    {
        $this->publicGists = $publicGists;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFollowers() : int
    {
        return $this->followers;
    }
    /**
     * 
     *
     * @param int $followers
     *
     * @return self
     */
    public function setFollowers(int $followers) : self
    {
        $this->followers = $followers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFollowing() : int
    {
        return $this->following;
    }
    /**
     * 
     *
     * @param int $following
     *
     * @return self
     */
    public function setFollowing(int $following) : self
    {
        $this->following = $following;
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
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBio() : ?string
    {
        return $this->bio;
    }
    /**
     * 
     *
     * @param string|null $bio
     *
     * @return self
     */
    public function setBio(?string $bio) : self
    {
        $this->bio = $bio;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocation() : ?string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSiteAdmin() : bool
    {
        return $this->siteAdmin;
    }
    /**
     * 
     *
     * @param bool $siteAdmin
     *
     * @return self
     */
    public function setSiteAdmin(bool $siteAdmin) : self
    {
        $this->siteAdmin = $siteAdmin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHireable() : ?bool
    {
        return $this->hireable;
    }
    /**
     * 
     *
     * @param bool|null $hireable
     *
     * @return self
     */
    public function setHireable(?bool $hireable) : self
    {
        $this->hireable = $hireable;
        return $this;
    }
    /**
     * 
     *
     * @return SearchResultTextMatchesItem[]
     */
    public function getTextMatches() : array
    {
        return $this->textMatches;
    }
    /**
     * 
     *
     * @param SearchResultTextMatchesItem[] $textMatches
     *
     * @return self
     */
    public function setTextMatches(array $textMatches) : self
    {
        $this->textMatches = $textMatches;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBlog() : ?string
    {
        return $this->blog;
    }
    /**
     * 
     *
     * @param string|null $blog
     *
     * @return self
     */
    public function setBlog(?string $blog) : self
    {
        $this->blog = $blog;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompany() : ?string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getSuspendedAt() : ?\DateTime
    {
        return $this->suspendedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $suspendedAt
     *
     * @return self
     */
    public function setSuspendedAt(?\DateTime $suspendedAt) : self
    {
        $this->suspendedAt = $suspendedAt;
        return $this;
    }
}