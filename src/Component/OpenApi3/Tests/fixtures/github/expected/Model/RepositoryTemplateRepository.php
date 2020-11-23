<?php

namespace Github\Model;

class RepositoryTemplateRepository
{
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $fullName;
    /**
     * 
     *
     * @var RepositoryTemplateRepositoryOwner
     */
    protected $owner;
    /**
     * 
     *
     * @var bool
     */
    protected $private;
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
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $fork;
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
    protected $archiveUrl;
    /**
     * 
     *
     * @var string
     */
    protected $assigneesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $blobsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $branchesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $collaboratorsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $commentsUrl;
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
    protected $compareUrl;
    /**
     * 
     *
     * @var string
     */
    protected $contentsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $contributorsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $deploymentsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $downloadsUrl;
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
    protected $forksUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gitCommitsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gitRefsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gitTagsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $gitUrl;
    /**
     * 
     *
     * @var string
     */
    protected $issueCommentUrl;
    /**
     * 
     *
     * @var string
     */
    protected $issueEventsUrl;
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
    protected $labelsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $languagesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $mergesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $milestonesUrl;
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
    protected $pullsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $releasesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $sshUrl;
    /**
     * 
     *
     * @var string
     */
    protected $stargazersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $statusesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $subscribersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionUrl;
    /**
     * 
     *
     * @var string
     */
    protected $tagsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $teamsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $treesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $cloneUrl;
    /**
     * 
     *
     * @var string
     */
    protected $mirrorUrl;
    /**
     * 
     *
     * @var string
     */
    protected $hooksUrl;
    /**
     * 
     *
     * @var string
     */
    protected $svnUrl;
    /**
     * 
     *
     * @var string
     */
    protected $homepage;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var int
     */
    protected $forksCount;
    /**
     * 
     *
     * @var int
     */
    protected $stargazersCount;
    /**
     * 
     *
     * @var int
     */
    protected $watchersCount;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var string
     */
    protected $defaultBranch;
    /**
     * 
     *
     * @var int
     */
    protected $openIssuesCount;
    /**
     * 
     *
     * @var bool
     */
    protected $isTemplate;
    /**
     * 
     *
     * @var string[]
     */
    protected $topics;
    /**
     * 
     *
     * @var bool
     */
    protected $hasIssues;
    /**
     * 
     *
     * @var bool
     */
    protected $hasProjects;
    /**
     * 
     *
     * @var bool
     */
    protected $hasWiki;
    /**
     * 
     *
     * @var bool
     */
    protected $hasPages;
    /**
     * 
     *
     * @var bool
     */
    protected $hasDownloads;
    /**
     * 
     *
     * @var bool
     */
    protected $archived;
    /**
     * 
     *
     * @var bool
     */
    protected $disabled;
    /**
     * 
     *
     * @var string
     */
    protected $visibility;
    /**
     * 
     *
     * @var string
     */
    protected $pushedAt;
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
     * @var RepositoryTemplateRepositoryPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @var bool
     */
    protected $allowRebaseMerge;
    /**
     * 
     *
     * @var string
     */
    protected $templateRepository;
    /**
     * 
     *
     * @var string
     */
    protected $tempCloneToken;
    /**
     * 
     *
     * @var bool
     */
    protected $allowSquashMerge;
    /**
     * 
     *
     * @var bool
     */
    protected $deleteBranchOnMerge;
    /**
     * 
     *
     * @var bool
     */
    protected $allowMergeCommit;
    /**
     * 
     *
     * @var int
     */
    protected $subscribersCount;
    /**
     * 
     *
     * @var int
     */
    protected $networkCount;
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
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return RepositoryTemplateRepositoryOwner
     */
    public function getOwner() : RepositoryTemplateRepositoryOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param RepositoryTemplateRepositoryOwner $owner
     *
     * @return self
     */
    public function setOwner(RepositoryTemplateRepositoryOwner $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * 
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->private = $private;
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
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFork() : bool
    {
        return $this->fork;
    }
    /**
     * 
     *
     * @param bool $fork
     *
     * @return self
     */
    public function setFork(bool $fork) : self
    {
        $this->fork = $fork;
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
    public function getArchiveUrl() : string
    {
        return $this->archiveUrl;
    }
    /**
     * 
     *
     * @param string $archiveUrl
     *
     * @return self
     */
    public function setArchiveUrl(string $archiveUrl) : self
    {
        $this->archiveUrl = $archiveUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssigneesUrl() : string
    {
        return $this->assigneesUrl;
    }
    /**
     * 
     *
     * @param string $assigneesUrl
     *
     * @return self
     */
    public function setAssigneesUrl(string $assigneesUrl) : self
    {
        $this->assigneesUrl = $assigneesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlobsUrl() : string
    {
        return $this->blobsUrl;
    }
    /**
     * 
     *
     * @param string $blobsUrl
     *
     * @return self
     */
    public function setBlobsUrl(string $blobsUrl) : self
    {
        $this->blobsUrl = $blobsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBranchesUrl() : string
    {
        return $this->branchesUrl;
    }
    /**
     * 
     *
     * @param string $branchesUrl
     *
     * @return self
     */
    public function setBranchesUrl(string $branchesUrl) : self
    {
        $this->branchesUrl = $branchesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCollaboratorsUrl() : string
    {
        return $this->collaboratorsUrl;
    }
    /**
     * 
     *
     * @param string $collaboratorsUrl
     *
     * @return self
     */
    public function setCollaboratorsUrl(string $collaboratorsUrl) : self
    {
        $this->collaboratorsUrl = $collaboratorsUrl;
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
    public function getCompareUrl() : string
    {
        return $this->compareUrl;
    }
    /**
     * 
     *
     * @param string $compareUrl
     *
     * @return self
     */
    public function setCompareUrl(string $compareUrl) : self
    {
        $this->compareUrl = $compareUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentsUrl() : string
    {
        return $this->contentsUrl;
    }
    /**
     * 
     *
     * @param string $contentsUrl
     *
     * @return self
     */
    public function setContentsUrl(string $contentsUrl) : self
    {
        $this->contentsUrl = $contentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContributorsUrl() : string
    {
        return $this->contributorsUrl;
    }
    /**
     * 
     *
     * @param string $contributorsUrl
     *
     * @return self
     */
    public function setContributorsUrl(string $contributorsUrl) : self
    {
        $this->contributorsUrl = $contributorsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeploymentsUrl() : string
    {
        return $this->deploymentsUrl;
    }
    /**
     * 
     *
     * @param string $deploymentsUrl
     *
     * @return self
     */
    public function setDeploymentsUrl(string $deploymentsUrl) : self
    {
        $this->deploymentsUrl = $deploymentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDownloadsUrl() : string
    {
        return $this->downloadsUrl;
    }
    /**
     * 
     *
     * @param string $downloadsUrl
     *
     * @return self
     */
    public function setDownloadsUrl(string $downloadsUrl) : self
    {
        $this->downloadsUrl = $downloadsUrl;
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
    public function getGitCommitsUrl() : string
    {
        return $this->gitCommitsUrl;
    }
    /**
     * 
     *
     * @param string $gitCommitsUrl
     *
     * @return self
     */
    public function setGitCommitsUrl(string $gitCommitsUrl) : self
    {
        $this->gitCommitsUrl = $gitCommitsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGitRefsUrl() : string
    {
        return $this->gitRefsUrl;
    }
    /**
     * 
     *
     * @param string $gitRefsUrl
     *
     * @return self
     */
    public function setGitRefsUrl(string $gitRefsUrl) : self
    {
        $this->gitRefsUrl = $gitRefsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGitTagsUrl() : string
    {
        return $this->gitTagsUrl;
    }
    /**
     * 
     *
     * @param string $gitTagsUrl
     *
     * @return self
     */
    public function setGitTagsUrl(string $gitTagsUrl) : self
    {
        $this->gitTagsUrl = $gitTagsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGitUrl() : string
    {
        return $this->gitUrl;
    }
    /**
     * 
     *
     * @param string $gitUrl
     *
     * @return self
     */
    public function setGitUrl(string $gitUrl) : self
    {
        $this->gitUrl = $gitUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssueCommentUrl() : string
    {
        return $this->issueCommentUrl;
    }
    /**
     * 
     *
     * @param string $issueCommentUrl
     *
     * @return self
     */
    public function setIssueCommentUrl(string $issueCommentUrl) : self
    {
        $this->issueCommentUrl = $issueCommentUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssueEventsUrl() : string
    {
        return $this->issueEventsUrl;
    }
    /**
     * 
     *
     * @param string $issueEventsUrl
     *
     * @return self
     */
    public function setIssueEventsUrl(string $issueEventsUrl) : self
    {
        $this->issueEventsUrl = $issueEventsUrl;
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
    public function getLabelsUrl() : string
    {
        return $this->labelsUrl;
    }
    /**
     * 
     *
     * @param string $labelsUrl
     *
     * @return self
     */
    public function setLabelsUrl(string $labelsUrl) : self
    {
        $this->labelsUrl = $labelsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguagesUrl() : string
    {
        return $this->languagesUrl;
    }
    /**
     * 
     *
     * @param string $languagesUrl
     *
     * @return self
     */
    public function setLanguagesUrl(string $languagesUrl) : self
    {
        $this->languagesUrl = $languagesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMergesUrl() : string
    {
        return $this->mergesUrl;
    }
    /**
     * 
     *
     * @param string $mergesUrl
     *
     * @return self
     */
    public function setMergesUrl(string $mergesUrl) : self
    {
        $this->mergesUrl = $mergesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMilestonesUrl() : string
    {
        return $this->milestonesUrl;
    }
    /**
     * 
     *
     * @param string $milestonesUrl
     *
     * @return self
     */
    public function setMilestonesUrl(string $milestonesUrl) : self
    {
        $this->milestonesUrl = $milestonesUrl;
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
    public function getPullsUrl() : string
    {
        return $this->pullsUrl;
    }
    /**
     * 
     *
     * @param string $pullsUrl
     *
     * @return self
     */
    public function setPullsUrl(string $pullsUrl) : self
    {
        $this->pullsUrl = $pullsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReleasesUrl() : string
    {
        return $this->releasesUrl;
    }
    /**
     * 
     *
     * @param string $releasesUrl
     *
     * @return self
     */
    public function setReleasesUrl(string $releasesUrl) : self
    {
        $this->releasesUrl = $releasesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSshUrl() : string
    {
        return $this->sshUrl;
    }
    /**
     * 
     *
     * @param string $sshUrl
     *
     * @return self
     */
    public function setSshUrl(string $sshUrl) : self
    {
        $this->sshUrl = $sshUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStargazersUrl() : string
    {
        return $this->stargazersUrl;
    }
    /**
     * 
     *
     * @param string $stargazersUrl
     *
     * @return self
     */
    public function setStargazersUrl(string $stargazersUrl) : self
    {
        $this->stargazersUrl = $stargazersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusesUrl() : string
    {
        return $this->statusesUrl;
    }
    /**
     * 
     *
     * @param string $statusesUrl
     *
     * @return self
     */
    public function setStatusesUrl(string $statusesUrl) : self
    {
        $this->statusesUrl = $statusesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubscribersUrl() : string
    {
        return $this->subscribersUrl;
    }
    /**
     * 
     *
     * @param string $subscribersUrl
     *
     * @return self
     */
    public function setSubscribersUrl(string $subscribersUrl) : self
    {
        $this->subscribersUrl = $subscribersUrl;
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
    /**
     * 
     *
     * @return string
     */
    public function getTagsUrl() : string
    {
        return $this->tagsUrl;
    }
    /**
     * 
     *
     * @param string $tagsUrl
     *
     * @return self
     */
    public function setTagsUrl(string $tagsUrl) : self
    {
        $this->tagsUrl = $tagsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamsUrl() : string
    {
        return $this->teamsUrl;
    }
    /**
     * 
     *
     * @param string $teamsUrl
     *
     * @return self
     */
    public function setTeamsUrl(string $teamsUrl) : self
    {
        $this->teamsUrl = $teamsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTreesUrl() : string
    {
        return $this->treesUrl;
    }
    /**
     * 
     *
     * @param string $treesUrl
     *
     * @return self
     */
    public function setTreesUrl(string $treesUrl) : self
    {
        $this->treesUrl = $treesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCloneUrl() : string
    {
        return $this->cloneUrl;
    }
    /**
     * 
     *
     * @param string $cloneUrl
     *
     * @return self
     */
    public function setCloneUrl(string $cloneUrl) : self
    {
        $this->cloneUrl = $cloneUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMirrorUrl() : string
    {
        return $this->mirrorUrl;
    }
    /**
     * 
     *
     * @param string $mirrorUrl
     *
     * @return self
     */
    public function setMirrorUrl(string $mirrorUrl) : self
    {
        $this->mirrorUrl = $mirrorUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHooksUrl() : string
    {
        return $this->hooksUrl;
    }
    /**
     * 
     *
     * @param string $hooksUrl
     *
     * @return self
     */
    public function setHooksUrl(string $hooksUrl) : self
    {
        $this->hooksUrl = $hooksUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSvnUrl() : string
    {
        return $this->svnUrl;
    }
    /**
     * 
     *
     * @param string $svnUrl
     *
     * @return self
     */
    public function setSvnUrl(string $svnUrl) : self
    {
        $this->svnUrl = $svnUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomepage() : string
    {
        return $this->homepage;
    }
    /**
     * 
     *
     * @param string $homepage
     *
     * @return self
     */
    public function setHomepage(string $homepage) : self
    {
        $this->homepage = $homepage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForksCount() : int
    {
        return $this->forksCount;
    }
    /**
     * 
     *
     * @param int $forksCount
     *
     * @return self
     */
    public function setForksCount(int $forksCount) : self
    {
        $this->forksCount = $forksCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStargazersCount() : int
    {
        return $this->stargazersCount;
    }
    /**
     * 
     *
     * @param int $stargazersCount
     *
     * @return self
     */
    public function setStargazersCount(int $stargazersCount) : self
    {
        $this->stargazersCount = $stargazersCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWatchersCount() : int
    {
        return $this->watchersCount;
    }
    /**
     * 
     *
     * @param int $watchersCount
     *
     * @return self
     */
    public function setWatchersCount(int $watchersCount) : self
    {
        $this->watchersCount = $watchersCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultBranch() : string
    {
        return $this->defaultBranch;
    }
    /**
     * 
     *
     * @param string $defaultBranch
     *
     * @return self
     */
    public function setDefaultBranch(string $defaultBranch) : self
    {
        $this->defaultBranch = $defaultBranch;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpenIssuesCount() : int
    {
        return $this->openIssuesCount;
    }
    /**
     * 
     *
     * @param int $openIssuesCount
     *
     * @return self
     */
    public function setOpenIssuesCount(int $openIssuesCount) : self
    {
        $this->openIssuesCount = $openIssuesCount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTemplate() : bool
    {
        return $this->isTemplate;
    }
    /**
     * 
     *
     * @param bool $isTemplate
     *
     * @return self
     */
    public function setIsTemplate(bool $isTemplate) : self
    {
        $this->isTemplate = $isTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTopics() : array
    {
        return $this->topics;
    }
    /**
     * 
     *
     * @param string[] $topics
     *
     * @return self
     */
    public function setTopics(array $topics) : self
    {
        $this->topics = $topics;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasIssues() : bool
    {
        return $this->hasIssues;
    }
    /**
     * 
     *
     * @param bool $hasIssues
     *
     * @return self
     */
    public function setHasIssues(bool $hasIssues) : self
    {
        $this->hasIssues = $hasIssues;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasProjects() : bool
    {
        return $this->hasProjects;
    }
    /**
     * 
     *
     * @param bool $hasProjects
     *
     * @return self
     */
    public function setHasProjects(bool $hasProjects) : self
    {
        $this->hasProjects = $hasProjects;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasWiki() : bool
    {
        return $this->hasWiki;
    }
    /**
     * 
     *
     * @param bool $hasWiki
     *
     * @return self
     */
    public function setHasWiki(bool $hasWiki) : self
    {
        $this->hasWiki = $hasWiki;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasPages() : bool
    {
        return $this->hasPages;
    }
    /**
     * 
     *
     * @param bool $hasPages
     *
     * @return self
     */
    public function setHasPages(bool $hasPages) : self
    {
        $this->hasPages = $hasPages;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasDownloads() : bool
    {
        return $this->hasDownloads;
    }
    /**
     * 
     *
     * @param bool $hasDownloads
     *
     * @return self
     */
    public function setHasDownloads(bool $hasDownloads) : self
    {
        $this->hasDownloads = $hasDownloads;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * 
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * 
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPushedAt() : string
    {
        return $this->pushedAt;
    }
    /**
     * 
     *
     * @param string $pushedAt
     *
     * @return self
     */
    public function setPushedAt(string $pushedAt) : self
    {
        $this->pushedAt = $pushedAt;
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
     * @return RepositoryTemplateRepositoryPermissions
     */
    public function getPermissions() : RepositoryTemplateRepositoryPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param RepositoryTemplateRepositoryPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(RepositoryTemplateRepositoryPermissions $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllowRebaseMerge() : bool
    {
        return $this->allowRebaseMerge;
    }
    /**
     * 
     *
     * @param bool $allowRebaseMerge
     *
     * @return self
     */
    public function setAllowRebaseMerge(bool $allowRebaseMerge) : self
    {
        $this->allowRebaseMerge = $allowRebaseMerge;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTemplateRepository() : string
    {
        return $this->templateRepository;
    }
    /**
     * 
     *
     * @param string $templateRepository
     *
     * @return self
     */
    public function setTemplateRepository(string $templateRepository) : self
    {
        $this->templateRepository = $templateRepository;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTempCloneToken() : string
    {
        return $this->tempCloneToken;
    }
    /**
     * 
     *
     * @param string $tempCloneToken
     *
     * @return self
     */
    public function setTempCloneToken(string $tempCloneToken) : self
    {
        $this->tempCloneToken = $tempCloneToken;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllowSquashMerge() : bool
    {
        return $this->allowSquashMerge;
    }
    /**
     * 
     *
     * @param bool $allowSquashMerge
     *
     * @return self
     */
    public function setAllowSquashMerge(bool $allowSquashMerge) : self
    {
        $this->allowSquashMerge = $allowSquashMerge;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeleteBranchOnMerge() : bool
    {
        return $this->deleteBranchOnMerge;
    }
    /**
     * 
     *
     * @param bool $deleteBranchOnMerge
     *
     * @return self
     */
    public function setDeleteBranchOnMerge(bool $deleteBranchOnMerge) : self
    {
        $this->deleteBranchOnMerge = $deleteBranchOnMerge;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllowMergeCommit() : bool
    {
        return $this->allowMergeCommit;
    }
    /**
     * 
     *
     * @param bool $allowMergeCommit
     *
     * @return self
     */
    public function setAllowMergeCommit(bool $allowMergeCommit) : self
    {
        $this->allowMergeCommit = $allowMergeCommit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSubscribersCount() : int
    {
        return $this->subscribersCount;
    }
    /**
     * 
     *
     * @param int $subscribersCount
     *
     * @return self
     */
    public function setSubscribersCount(int $subscribersCount) : self
    {
        $this->subscribersCount = $subscribersCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNetworkCount() : int
    {
        return $this->networkCount;
    }
    /**
     * 
     *
     * @param int $networkCount
     *
     * @return self
     */
    public function setNetworkCount(int $networkCount) : self
    {
        $this->networkCount = $networkCount;
        return $this;
    }
}