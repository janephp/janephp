<?php

namespace Github\Model;

class PrivateUser extends \ArrayObject
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
    protected $eventsUrl;
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
     * @var bool
     */
    protected $siteAdmin;
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
    protected $company;
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
    protected $location;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hireable;
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
    protected $twitterUsername;
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
     * @var int
     */
    protected $privateGists;
    /**
     * 
     *
     * @var int
     */
    protected $totalPrivateRepos;
    /**
     * 
     *
     * @var int
     */
    protected $ownedPrivateRepos;
    /**
     * 
     *
     * @var int
     */
    protected $diskUsage;
    /**
     * 
     *
     * @var int
     */
    protected $collaborators;
    /**
     * 
     *
     * @var bool
     */
    protected $twoFactorAuthentication;
    /**
     * 
     *
     * @var PrivateUserPlan
     */
    protected $plan;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $suspendedAt;
    /**
     * 
     *
     * @var bool
     */
    protected $businessPlus;
    /**
     * 
     *
     * @var string
     */
    protected $ldapDn;
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
        $this->initialized['login'] = true;
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
        $this->initialized['id'] = true;
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
        $this->initialized['nodeId'] = true;
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
        $this->initialized['avatarUrl'] = true;
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
        $this->initialized['gravatarId'] = true;
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
        $this->initialized['url'] = true;
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
        $this->initialized['htmlUrl'] = true;
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
        $this->initialized['followersUrl'] = true;
        $this->followersUrl = $followersUrl;
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
        $this->initialized['followingUrl'] = true;
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
        $this->initialized['gistsUrl'] = true;
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
        $this->initialized['starredUrl'] = true;
        $this->starredUrl = $starredUrl;
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
        $this->initialized['subscriptionsUrl'] = true;
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
        $this->initialized['organizationsUrl'] = true;
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
        $this->initialized['reposUrl'] = true;
        $this->reposUrl = $reposUrl;
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
        $this->initialized['eventsUrl'] = true;
        $this->eventsUrl = $eventsUrl;
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
        $this->initialized['receivedEventsUrl'] = true;
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
        $this->initialized['type'] = true;
        $this->type = $type;
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
        $this->initialized['siteAdmin'] = true;
        $this->siteAdmin = $siteAdmin;
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
        $this->initialized['name'] = true;
        $this->name = $name;
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
        $this->initialized['company'] = true;
        $this->company = $company;
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
        $this->initialized['blog'] = true;
        $this->blog = $blog;
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
        $this->initialized['location'] = true;
        $this->location = $location;
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
        $this->initialized['email'] = true;
        $this->email = $email;
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
        $this->initialized['hireable'] = true;
        $this->hireable = $hireable;
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
        $this->initialized['bio'] = true;
        $this->bio = $bio;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTwitterUsername() : ?string
    {
        return $this->twitterUsername;
    }
    /**
     * 
     *
     * @param string|null $twitterUsername
     *
     * @return self
     */
    public function setTwitterUsername(?string $twitterUsername) : self
    {
        $this->initialized['twitterUsername'] = true;
        $this->twitterUsername = $twitterUsername;
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
        $this->initialized['publicRepos'] = true;
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
        $this->initialized['publicGists'] = true;
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
        $this->initialized['followers'] = true;
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
        $this->initialized['following'] = true;
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
        $this->initialized['createdAt'] = true;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPrivateGists() : int
    {
        return $this->privateGists;
    }
    /**
     * 
     *
     * @param int $privateGists
     *
     * @return self
     */
    public function setPrivateGists(int $privateGists) : self
    {
        $this->initialized['privateGists'] = true;
        $this->privateGists = $privateGists;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalPrivateRepos() : int
    {
        return $this->totalPrivateRepos;
    }
    /**
     * 
     *
     * @param int $totalPrivateRepos
     *
     * @return self
     */
    public function setTotalPrivateRepos(int $totalPrivateRepos) : self
    {
        $this->initialized['totalPrivateRepos'] = true;
        $this->totalPrivateRepos = $totalPrivateRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOwnedPrivateRepos() : int
    {
        return $this->ownedPrivateRepos;
    }
    /**
     * 
     *
     * @param int $ownedPrivateRepos
     *
     * @return self
     */
    public function setOwnedPrivateRepos(int $ownedPrivateRepos) : self
    {
        $this->initialized['ownedPrivateRepos'] = true;
        $this->ownedPrivateRepos = $ownedPrivateRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDiskUsage() : int
    {
        return $this->diskUsage;
    }
    /**
     * 
     *
     * @param int $diskUsage
     *
     * @return self
     */
    public function setDiskUsage(int $diskUsage) : self
    {
        $this->initialized['diskUsage'] = true;
        $this->diskUsage = $diskUsage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCollaborators() : int
    {
        return $this->collaborators;
    }
    /**
     * 
     *
     * @param int $collaborators
     *
     * @return self
     */
    public function setCollaborators(int $collaborators) : self
    {
        $this->initialized['collaborators'] = true;
        $this->collaborators = $collaborators;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTwoFactorAuthentication() : bool
    {
        return $this->twoFactorAuthentication;
    }
    /**
     * 
     *
     * @param bool $twoFactorAuthentication
     *
     * @return self
     */
    public function setTwoFactorAuthentication(bool $twoFactorAuthentication) : self
    {
        $this->initialized['twoFactorAuthentication'] = true;
        $this->twoFactorAuthentication = $twoFactorAuthentication;
        return $this;
    }
    /**
     * 
     *
     * @return PrivateUserPlan
     */
    public function getPlan() : PrivateUserPlan
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param PrivateUserPlan $plan
     *
     * @return self
     */
    public function setPlan(PrivateUserPlan $plan) : self
    {
        $this->initialized['plan'] = true;
        $this->plan = $plan;
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
        $this->initialized['suspendedAt'] = true;
        $this->suspendedAt = $suspendedAt;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBusinessPlus() : bool
    {
        return $this->businessPlus;
    }
    /**
     * 
     *
     * @param bool $businessPlus
     *
     * @return self
     */
    public function setBusinessPlus(bool $businessPlus) : self
    {
        $this->initialized['businessPlus'] = true;
        $this->businessPlus = $businessPlus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLdapDn() : string
    {
        return $this->ldapDn;
    }
    /**
     * 
     *
     * @param string $ldapDn
     *
     * @return self
     */
    public function setLdapDn(string $ldapDn) : self
    {
        $this->initialized['ldapDn'] = true;
        $this->ldapDn = $ldapDn;
        return $this;
    }
}