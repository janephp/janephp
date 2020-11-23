<?php

namespace Github\Model;

class GetResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $currentUserUrl;
    /**
     * 
     *
     * @var string
     */
    protected $currentUserAuthorizationsHtmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $authorizationsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $codeSearchUrl;
    /**
     * 
     *
     * @var string
     */
    protected $commitSearchUrl;
    /**
     * 
     *
     * @var string
     */
    protected $emailsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $emojisUrl;
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
    protected $feedsUrl;
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
    protected $hubUrl;
    /**
     * 
     *
     * @var string
     */
    protected $issueSearchUrl;
    /**
     * 
     *
     * @var string
     */
    protected $issuesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $keysUrl;
    /**
     * 
     *
     * @var string
     */
    protected $labelSearchUrl;
    /**
     * 
     *
     * @var string
     */
    protected $notificationsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $organizationUrl;
    /**
     * 
     *
     * @var string
     */
    protected $organizationRepositoriesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $organizationTeamsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $publicGistsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $rateLimitUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositorySearchUrl;
    /**
     * 
     *
     * @var string
     */
    protected $currentUserRepositoriesUrl;
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
    protected $starredGistsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $topicSearchUrl;
    /**
     * 
     *
     * @var string
     */
    protected $userUrl;
    /**
     * 
     *
     * @var string
     */
    protected $userOrganizationsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $userRepositoriesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $userSearchUrl;
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserUrl() : string
    {
        return $this->currentUserUrl;
    }
    /**
     * 
     *
     * @param string $currentUserUrl
     *
     * @return self
     */
    public function setCurrentUserUrl(string $currentUserUrl) : self
    {
        $this->currentUserUrl = $currentUserUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserAuthorizationsHtmlUrl() : string
    {
        return $this->currentUserAuthorizationsHtmlUrl;
    }
    /**
     * 
     *
     * @param string $currentUserAuthorizationsHtmlUrl
     *
     * @return self
     */
    public function setCurrentUserAuthorizationsHtmlUrl(string $currentUserAuthorizationsHtmlUrl) : self
    {
        $this->currentUserAuthorizationsHtmlUrl = $currentUserAuthorizationsHtmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorizationsUrl() : string
    {
        return $this->authorizationsUrl;
    }
    /**
     * 
     *
     * @param string $authorizationsUrl
     *
     * @return self
     */
    public function setAuthorizationsUrl(string $authorizationsUrl) : self
    {
        $this->authorizationsUrl = $authorizationsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCodeSearchUrl() : string
    {
        return $this->codeSearchUrl;
    }
    /**
     * 
     *
     * @param string $codeSearchUrl
     *
     * @return self
     */
    public function setCodeSearchUrl(string $codeSearchUrl) : self
    {
        $this->codeSearchUrl = $codeSearchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommitSearchUrl() : string
    {
        return $this->commitSearchUrl;
    }
    /**
     * 
     *
     * @param string $commitSearchUrl
     *
     * @return self
     */
    public function setCommitSearchUrl(string $commitSearchUrl) : self
    {
        $this->commitSearchUrl = $commitSearchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmailsUrl() : string
    {
        return $this->emailsUrl;
    }
    /**
     * 
     *
     * @param string $emailsUrl
     *
     * @return self
     */
    public function setEmailsUrl(string $emailsUrl) : self
    {
        $this->emailsUrl = $emailsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmojisUrl() : string
    {
        return $this->emojisUrl;
    }
    /**
     * 
     *
     * @param string $emojisUrl
     *
     * @return self
     */
    public function setEmojisUrl(string $emojisUrl) : self
    {
        $this->emojisUrl = $emojisUrl;
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
     * @return string
     */
    public function getFeedsUrl() : string
    {
        return $this->feedsUrl;
    }
    /**
     * 
     *
     * @param string $feedsUrl
     *
     * @return self
     */
    public function setFeedsUrl(string $feedsUrl) : self
    {
        $this->feedsUrl = $feedsUrl;
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
    public function getHubUrl() : string
    {
        return $this->hubUrl;
    }
    /**
     * 
     *
     * @param string $hubUrl
     *
     * @return self
     */
    public function setHubUrl(string $hubUrl) : self
    {
        $this->hubUrl = $hubUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssueSearchUrl() : string
    {
        return $this->issueSearchUrl;
    }
    /**
     * 
     *
     * @param string $issueSearchUrl
     *
     * @return self
     */
    public function setIssueSearchUrl(string $issueSearchUrl) : self
    {
        $this->issueSearchUrl = $issueSearchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssuesUrl() : string
    {
        return $this->issuesUrl;
    }
    /**
     * 
     *
     * @param string $issuesUrl
     *
     * @return self
     */
    public function setIssuesUrl(string $issuesUrl) : self
    {
        $this->issuesUrl = $issuesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKeysUrl() : string
    {
        return $this->keysUrl;
    }
    /**
     * 
     *
     * @param string $keysUrl
     *
     * @return self
     */
    public function setKeysUrl(string $keysUrl) : self
    {
        $this->keysUrl = $keysUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabelSearchUrl() : string
    {
        return $this->labelSearchUrl;
    }
    /**
     * 
     *
     * @param string $labelSearchUrl
     *
     * @return self
     */
    public function setLabelSearchUrl(string $labelSearchUrl) : self
    {
        $this->labelSearchUrl = $labelSearchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNotificationsUrl() : string
    {
        return $this->notificationsUrl;
    }
    /**
     * 
     *
     * @param string $notificationsUrl
     *
     * @return self
     */
    public function setNotificationsUrl(string $notificationsUrl) : self
    {
        $this->notificationsUrl = $notificationsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationUrl() : string
    {
        return $this->organizationUrl;
    }
    /**
     * 
     *
     * @param string $organizationUrl
     *
     * @return self
     */
    public function setOrganizationUrl(string $organizationUrl) : self
    {
        $this->organizationUrl = $organizationUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationRepositoriesUrl() : string
    {
        return $this->organizationRepositoriesUrl;
    }
    /**
     * 
     *
     * @param string $organizationRepositoriesUrl
     *
     * @return self
     */
    public function setOrganizationRepositoriesUrl(string $organizationRepositoriesUrl) : self
    {
        $this->organizationRepositoriesUrl = $organizationRepositoriesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationTeamsUrl() : string
    {
        return $this->organizationTeamsUrl;
    }
    /**
     * 
     *
     * @param string $organizationTeamsUrl
     *
     * @return self
     */
    public function setOrganizationTeamsUrl(string $organizationTeamsUrl) : self
    {
        $this->organizationTeamsUrl = $organizationTeamsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicGistsUrl() : string
    {
        return $this->publicGistsUrl;
    }
    /**
     * 
     *
     * @param string $publicGistsUrl
     *
     * @return self
     */
    public function setPublicGistsUrl(string $publicGistsUrl) : self
    {
        $this->publicGistsUrl = $publicGistsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRateLimitUrl() : string
    {
        return $this->rateLimitUrl;
    }
    /**
     * 
     *
     * @param string $rateLimitUrl
     *
     * @return self
     */
    public function setRateLimitUrl(string $rateLimitUrl) : self
    {
        $this->rateLimitUrl = $rateLimitUrl;
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
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositorySearchUrl() : string
    {
        return $this->repositorySearchUrl;
    }
    /**
     * 
     *
     * @param string $repositorySearchUrl
     *
     * @return self
     */
    public function setRepositorySearchUrl(string $repositorySearchUrl) : self
    {
        $this->repositorySearchUrl = $repositorySearchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentUserRepositoriesUrl() : string
    {
        return $this->currentUserRepositoriesUrl;
    }
    /**
     * 
     *
     * @param string $currentUserRepositoriesUrl
     *
     * @return self
     */
    public function setCurrentUserRepositoriesUrl(string $currentUserRepositoriesUrl) : self
    {
        $this->currentUserRepositoriesUrl = $currentUserRepositoriesUrl;
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
    public function getStarredGistsUrl() : string
    {
        return $this->starredGistsUrl;
    }
    /**
     * 
     *
     * @param string $starredGistsUrl
     *
     * @return self
     */
    public function setStarredGistsUrl(string $starredGistsUrl) : self
    {
        $this->starredGistsUrl = $starredGistsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTopicSearchUrl() : string
    {
        return $this->topicSearchUrl;
    }
    /**
     * 
     *
     * @param string $topicSearchUrl
     *
     * @return self
     */
    public function setTopicSearchUrl(string $topicSearchUrl) : self
    {
        $this->topicSearchUrl = $topicSearchUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserUrl() : string
    {
        return $this->userUrl;
    }
    /**
     * 
     *
     * @param string $userUrl
     *
     * @return self
     */
    public function setUserUrl(string $userUrl) : self
    {
        $this->userUrl = $userUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserOrganizationsUrl() : string
    {
        return $this->userOrganizationsUrl;
    }
    /**
     * 
     *
     * @param string $userOrganizationsUrl
     *
     * @return self
     */
    public function setUserOrganizationsUrl(string $userOrganizationsUrl) : self
    {
        $this->userOrganizationsUrl = $userOrganizationsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserRepositoriesUrl() : string
    {
        return $this->userRepositoriesUrl;
    }
    /**
     * 
     *
     * @param string $userRepositoriesUrl
     *
     * @return self
     */
    public function setUserRepositoriesUrl(string $userRepositoriesUrl) : self
    {
        $this->userRepositoriesUrl = $userRepositoriesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserSearchUrl() : string
    {
        return $this->userSearchUrl;
    }
    /**
     * 
     *
     * @param string $userSearchUrl
     *
     * @return self
     */
    public function setUserSearchUrl(string $userSearchUrl) : self
    {
        $this->userSearchUrl = $userSearchUrl;
        return $this;
    }
}