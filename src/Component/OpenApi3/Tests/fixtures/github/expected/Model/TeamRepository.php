<?php

namespace Github\Model;

class TeamRepository extends \ArrayObject
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
     * Unique identifier of the repository
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
     * The name of the repository.
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
     * @var TeamRepositoryLicense|null
     */
    protected $license;
    /**
     * 
     *
     * @var int
     */
    protected $forks;
    /**
     * 
     *
     * @var TeamRepositoryPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @var TeamRepositoryOwner|null
     */
    protected $owner;
    /**
     * Whether the repository is private or public.
     *
     * @var bool
     */
    protected $private = false;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
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
     * @var string|null
     */
    protected $homepage;
    /**
     * 
     *
     * @var string|null
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
     * The default branch of the repository.
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
     * Whether this repository acts as a template that can be used to generate new repositories.
     *
     * @var bool
     */
    protected $isTemplate = false;
    /**
     * 
     *
     * @var string[]
     */
    protected $topics;
    /**
     * Whether issues are enabled.
     *
     * @var bool
     */
    protected $hasIssues = true;
    /**
     * Whether projects are enabled.
     *
     * @var bool
     */
    protected $hasProjects = true;
    /**
     * Whether the wiki is enabled.
     *
     * @var bool
     */
    protected $hasWiki = true;
    /**
     * 
     *
     * @var bool
     */
    protected $hasPages;
    /**
     * Whether downloads are enabled.
     *
     * @var bool
     */
    protected $hasDownloads = true;
    /**
     * Whether the repository is archived.
     *
     * @var bool
     */
    protected $archived = false;
    /**
     * Returns whether or not this repository disabled.
     *
     * @var bool
     */
    protected $disabled;
    /**
     * The repository visibility: public, private, or internal.
     *
     * @var string
     */
    protected $visibility = 'public';
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $pushedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Whether to allow rebase merges for pull requests.
     *
     * @var bool
     */
    protected $allowRebaseMerge = true;
    /**
     * 
     *
     * @var TeamRepositoryTemplateRepository|null
     */
    protected $templateRepository;
    /**
     * 
     *
     * @var string
     */
    protected $tempCloneToken;
    /**
     * Whether to allow squash merges for pull requests.
     *
     * @var bool
     */
    protected $allowSquashMerge = true;
    /**
     * Whether to delete head branches when pull requests are merged
     *
     * @var bool
     */
    protected $deleteBranchOnMerge = false;
    /**
     * Whether to allow merge commits for pull requests.
     *
     * @var bool
     */
    protected $allowMergeCommit = true;
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
     * @var int
     */
    protected $openIssues;
    /**
     * 
     *
     * @var int
     */
    protected $watchers;
    /**
     * 
     *
     * @var string
     */
    protected $masterBranch;
    /**
     * Unique identifier of the repository
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the repository
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
     * The name of the repository.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the repository.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
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
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return TeamRepositoryLicense|null
     */
    public function getLicense() : ?TeamRepositoryLicense
    {
        return $this->license;
    }
    /**
     * 
     *
     * @param TeamRepositoryLicense|null $license
     *
     * @return self
     */
    public function setLicense(?TeamRepositoryLicense $license) : self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getForks() : int
    {
        return $this->forks;
    }
    /**
     * 
     *
     * @param int $forks
     *
     * @return self
     */
    public function setForks(int $forks) : self
    {
        $this->initialized['forks'] = true;
        $this->forks = $forks;
        return $this;
    }
    /**
     * 
     *
     * @return TeamRepositoryPermissions
     */
    public function getPermissions() : TeamRepositoryPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param TeamRepositoryPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(TeamRepositoryPermissions $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return TeamRepositoryOwner|null
     */
    public function getOwner() : ?TeamRepositoryOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param TeamRepositoryOwner|null $owner
     *
     * @return self
     */
    public function setOwner(?TeamRepositoryOwner $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * Whether the repository is private or public.
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * Whether the repository is private or public.
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->initialized['private'] = true;
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
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
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
        $this->initialized['description'] = true;
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
        $this->initialized['fork'] = true;
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
        $this->initialized['url'] = true;
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
        $this->initialized['archiveUrl'] = true;
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
        $this->initialized['assigneesUrl'] = true;
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
        $this->initialized['blobsUrl'] = true;
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
        $this->initialized['branchesUrl'] = true;
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
        $this->initialized['collaboratorsUrl'] = true;
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
        $this->initialized['commentsUrl'] = true;
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
        $this->initialized['commitsUrl'] = true;
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
        $this->initialized['compareUrl'] = true;
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
        $this->initialized['contentsUrl'] = true;
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
        $this->initialized['contributorsUrl'] = true;
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
        $this->initialized['deploymentsUrl'] = true;
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
        $this->initialized['downloadsUrl'] = true;
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
        $this->initialized['eventsUrl'] = true;
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
        $this->initialized['forksUrl'] = true;
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
        $this->initialized['gitCommitsUrl'] = true;
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
        $this->initialized['gitRefsUrl'] = true;
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
        $this->initialized['gitTagsUrl'] = true;
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
        $this->initialized['gitUrl'] = true;
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
        $this->initialized['issueCommentUrl'] = true;
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
        $this->initialized['issueEventsUrl'] = true;
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
        $this->initialized['labelsUrl'] = true;
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
        $this->initialized['languagesUrl'] = true;
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
        $this->initialized['mergesUrl'] = true;
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
        $this->initialized['milestonesUrl'] = true;
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
        $this->initialized['notificationsUrl'] = true;
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
        $this->initialized['pullsUrl'] = true;
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
        $this->initialized['releasesUrl'] = true;
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
        $this->initialized['sshUrl'] = true;
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
        $this->initialized['stargazersUrl'] = true;
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
        $this->initialized['statusesUrl'] = true;
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
        $this->initialized['subscribersUrl'] = true;
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
        $this->initialized['subscriptionUrl'] = true;
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
        $this->initialized['tagsUrl'] = true;
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
        $this->initialized['teamsUrl'] = true;
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
        $this->initialized['treesUrl'] = true;
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
        $this->initialized['cloneUrl'] = true;
        $this->cloneUrl = $cloneUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMirrorUrl() : ?string
    {
        return $this->mirrorUrl;
    }
    /**
     * 
     *
     * @param string|null $mirrorUrl
     *
     * @return self
     */
    public function setMirrorUrl(?string $mirrorUrl) : self
    {
        $this->initialized['mirrorUrl'] = true;
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
        $this->initialized['hooksUrl'] = true;
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
        $this->initialized['svnUrl'] = true;
        $this->svnUrl = $svnUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomepage() : ?string
    {
        return $this->homepage;
    }
    /**
     * 
     *
     * @param string|null $homepage
     *
     * @return self
     */
    public function setHomepage(?string $homepage) : self
    {
        $this->initialized['homepage'] = true;
        $this->homepage = $homepage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->initialized['language'] = true;
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
        $this->initialized['forksCount'] = true;
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
        $this->initialized['stargazersCount'] = true;
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
        $this->initialized['watchersCount'] = true;
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
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The default branch of the repository.
     *
     * @return string
     */
    public function getDefaultBranch() : string
    {
        return $this->defaultBranch;
    }
    /**
     * The default branch of the repository.
     *
     * @param string $defaultBranch
     *
     * @return self
     */
    public function setDefaultBranch(string $defaultBranch) : self
    {
        $this->initialized['defaultBranch'] = true;
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
        $this->initialized['openIssuesCount'] = true;
        $this->openIssuesCount = $openIssuesCount;
        return $this;
    }
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     *
     * @return bool
     */
    public function getIsTemplate() : bool
    {
        return $this->isTemplate;
    }
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     *
     * @param bool $isTemplate
     *
     * @return self
     */
    public function setIsTemplate(bool $isTemplate) : self
    {
        $this->initialized['isTemplate'] = true;
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
        $this->initialized['topics'] = true;
        $this->topics = $topics;
        return $this;
    }
    /**
     * Whether issues are enabled.
     *
     * @return bool
     */
    public function getHasIssues() : bool
    {
        return $this->hasIssues;
    }
    /**
     * Whether issues are enabled.
     *
     * @param bool $hasIssues
     *
     * @return self
     */
    public function setHasIssues(bool $hasIssues) : self
    {
        $this->initialized['hasIssues'] = true;
        $this->hasIssues = $hasIssues;
        return $this;
    }
    /**
     * Whether projects are enabled.
     *
     * @return bool
     */
    public function getHasProjects() : bool
    {
        return $this->hasProjects;
    }
    /**
     * Whether projects are enabled.
     *
     * @param bool $hasProjects
     *
     * @return self
     */
    public function setHasProjects(bool $hasProjects) : self
    {
        $this->initialized['hasProjects'] = true;
        $this->hasProjects = $hasProjects;
        return $this;
    }
    /**
     * Whether the wiki is enabled.
     *
     * @return bool
     */
    public function getHasWiki() : bool
    {
        return $this->hasWiki;
    }
    /**
     * Whether the wiki is enabled.
     *
     * @param bool $hasWiki
     *
     * @return self
     */
    public function setHasWiki(bool $hasWiki) : self
    {
        $this->initialized['hasWiki'] = true;
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
        $this->initialized['hasPages'] = true;
        $this->hasPages = $hasPages;
        return $this;
    }
    /**
     * Whether downloads are enabled.
     *
     * @return bool
     */
    public function getHasDownloads() : bool
    {
        return $this->hasDownloads;
    }
    /**
     * Whether downloads are enabled.
     *
     * @param bool $hasDownloads
     *
     * @return self
     */
    public function setHasDownloads(bool $hasDownloads) : self
    {
        $this->initialized['hasDownloads'] = true;
        $this->hasDownloads = $hasDownloads;
        return $this;
    }
    /**
     * Whether the repository is archived.
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * Whether the repository is archived.
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * Returns whether or not this repository disabled.
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * Returns whether or not this repository disabled.
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * The repository visibility: public, private, or internal.
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * The repository visibility: public, private, or internal.
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility) : self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getPushedAt() : ?\DateTime
    {
        return $this->pushedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $pushedAt
     *
     * @return self
     */
    public function setPushedAt(?\DateTime $pushedAt) : self
    {
        $this->initialized['pushedAt'] = true;
        $this->pushedAt = $pushedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Whether to allow rebase merges for pull requests.
     *
     * @return bool
     */
    public function getAllowRebaseMerge() : bool
    {
        return $this->allowRebaseMerge;
    }
    /**
     * Whether to allow rebase merges for pull requests.
     *
     * @param bool $allowRebaseMerge
     *
     * @return self
     */
    public function setAllowRebaseMerge(bool $allowRebaseMerge) : self
    {
        $this->initialized['allowRebaseMerge'] = true;
        $this->allowRebaseMerge = $allowRebaseMerge;
        return $this;
    }
    /**
     * 
     *
     * @return TeamRepositoryTemplateRepository|null
     */
    public function getTemplateRepository() : ?TeamRepositoryTemplateRepository
    {
        return $this->templateRepository;
    }
    /**
     * 
     *
     * @param TeamRepositoryTemplateRepository|null $templateRepository
     *
     * @return self
     */
    public function setTemplateRepository(?TeamRepositoryTemplateRepository $templateRepository) : self
    {
        $this->initialized['templateRepository'] = true;
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
        $this->initialized['tempCloneToken'] = true;
        $this->tempCloneToken = $tempCloneToken;
        return $this;
    }
    /**
     * Whether to allow squash merges for pull requests.
     *
     * @return bool
     */
    public function getAllowSquashMerge() : bool
    {
        return $this->allowSquashMerge;
    }
    /**
     * Whether to allow squash merges for pull requests.
     *
     * @param bool $allowSquashMerge
     *
     * @return self
     */
    public function setAllowSquashMerge(bool $allowSquashMerge) : self
    {
        $this->initialized['allowSquashMerge'] = true;
        $this->allowSquashMerge = $allowSquashMerge;
        return $this;
    }
    /**
     * Whether to delete head branches when pull requests are merged
     *
     * @return bool
     */
    public function getDeleteBranchOnMerge() : bool
    {
        return $this->deleteBranchOnMerge;
    }
    /**
     * Whether to delete head branches when pull requests are merged
     *
     * @param bool $deleteBranchOnMerge
     *
     * @return self
     */
    public function setDeleteBranchOnMerge(bool $deleteBranchOnMerge) : self
    {
        $this->initialized['deleteBranchOnMerge'] = true;
        $this->deleteBranchOnMerge = $deleteBranchOnMerge;
        return $this;
    }
    /**
     * Whether to allow merge commits for pull requests.
     *
     * @return bool
     */
    public function getAllowMergeCommit() : bool
    {
        return $this->allowMergeCommit;
    }
    /**
     * Whether to allow merge commits for pull requests.
     *
     * @param bool $allowMergeCommit
     *
     * @return self
     */
    public function setAllowMergeCommit(bool $allowMergeCommit) : self
    {
        $this->initialized['allowMergeCommit'] = true;
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
        $this->initialized['subscribersCount'] = true;
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
        $this->initialized['networkCount'] = true;
        $this->networkCount = $networkCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpenIssues() : int
    {
        return $this->openIssues;
    }
    /**
     * 
     *
     * @param int $openIssues
     *
     * @return self
     */
    public function setOpenIssues(int $openIssues) : self
    {
        $this->initialized['openIssues'] = true;
        $this->openIssues = $openIssues;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWatchers() : int
    {
        return $this->watchers;
    }
    /**
     * 
     *
     * @param int $watchers
     *
     * @return self
     */
    public function setWatchers(int $watchers) : self
    {
        $this->initialized['watchers'] = true;
        $this->watchers = $watchers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMasterBranch() : string
    {
        return $this->masterBranch;
    }
    /**
     * 
     *
     * @param string $masterBranch
     *
     * @return self
     */
    public function setMasterBranch(string $masterBranch) : self
    {
        $this->initialized['masterBranch'] = true;
        $this->masterBranch = $masterBranch;
        return $this;
    }
}