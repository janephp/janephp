<?php

namespace Github\Model;

class GetResponse200 extends \ArrayObject
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
        $this->initialized['currentUserUrl'] = true;
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
        $this->initialized['currentUserAuthorizationsHtmlUrl'] = true;
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
        $this->initialized['authorizationsUrl'] = true;
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
        $this->initialized['codeSearchUrl'] = true;
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
        $this->initialized['commitSearchUrl'] = true;
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
        $this->initialized['emailsUrl'] = true;
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
        $this->initialized['emojisUrl'] = true;
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
        $this->initialized['eventsUrl'] = true;
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
        $this->initialized['feedsUrl'] = true;
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
        $this->initialized['hubUrl'] = true;
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
        $this->initialized['issueSearchUrl'] = true;
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
        $this->initialized['issuesUrl'] = true;
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
        $this->initialized['keysUrl'] = true;
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
        $this->initialized['labelSearchUrl'] = true;
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
        $this->initialized['notificationsUrl'] = true;
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
        $this->initialized['organizationUrl'] = true;
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
        $this->initialized['organizationRepositoriesUrl'] = true;
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
        $this->initialized['organizationTeamsUrl'] = true;
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
        $this->initialized['publicGistsUrl'] = true;
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
        $this->initialized['rateLimitUrl'] = true;
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
        $this->initialized['repositoryUrl'] = true;
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
        $this->initialized['repositorySearchUrl'] = true;
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
        $this->initialized['currentUserRepositoriesUrl'] = true;
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
        $this->initialized['starredUrl'] = true;
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
        $this->initialized['starredGistsUrl'] = true;
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
        $this->initialized['topicSearchUrl'] = true;
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
        $this->initialized['userUrl'] = true;
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
        $this->initialized['userOrganizationsUrl'] = true;
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
        $this->initialized['userRepositoriesUrl'] = true;
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
        $this->initialized['userSearchUrl'] = true;
        $this->userSearchUrl = $userSearchUrl;
        return $this;
    }
}