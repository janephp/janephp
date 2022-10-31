<?php

namespace Github\Model;

class UserReposPostBody extends \ArrayObject
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
     * The name of the repository.
     *
     * @var string
     */
    protected $name;
    /**
     * A short description of the repository.
     *
     * @var string
     */
    protected $description;
    /**
     * A URL with more information about the repository.
     *
     * @var string
     */
    protected $homepage;
    /**
     * Whether the repository is private or public.
     *
     * @var bool
     */
    protected $private = false;
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
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     *
     * @var int
     */
    protected $teamId;
    /**
     * Whether the repository is initialized with a minimal README.
     *
     * @var bool
     */
    protected $autoInit = false;
    /**
     * The desired language or platform to apply to the .gitignore.
     *
     * @var string
     */
    protected $gitignoreTemplate;
    /**
     * The license keyword of the open source license for this repository.
     *
     * @var string
     */
    protected $licenseTemplate;
    /**
     * Whether to allow squash merges for pull requests.
     *
     * @var bool
     */
    protected $allowSquashMerge = true;
    /**
     * Whether to allow merge commits for pull requests.
     *
     * @var bool
     */
    protected $allowMergeCommit = true;
    /**
     * Whether to allow rebase merges for pull requests.
     *
     * @var bool
     */
    protected $allowRebaseMerge = true;
    /**
     * Whether to delete head branches when pull requests are merged
     *
     * @var bool
     */
    protected $deleteBranchOnMerge = false;
    /**
     * Whether downloads are enabled.
     *
     * @var bool
     */
    protected $hasDownloads = true;
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     *
     * @var bool
     */
    protected $isTemplate = false;
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
     * A short description of the repository.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short description of the repository.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * A URL with more information about the repository.
     *
     * @return string
     */
    public function getHomepage() : string
    {
        return $this->homepage;
    }
    /**
     * A URL with more information about the repository.
     *
     * @param string $homepage
     *
     * @return self
     */
    public function setHomepage(string $homepage) : self
    {
        $this->initialized['homepage'] = true;
        $this->homepage = $homepage;
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
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->initialized['teamId'] = true;
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * Whether the repository is initialized with a minimal README.
     *
     * @return bool
     */
    public function getAutoInit() : bool
    {
        return $this->autoInit;
    }
    /**
     * Whether the repository is initialized with a minimal README.
     *
     * @param bool $autoInit
     *
     * @return self
     */
    public function setAutoInit(bool $autoInit) : self
    {
        $this->initialized['autoInit'] = true;
        $this->autoInit = $autoInit;
        return $this;
    }
    /**
     * The desired language or platform to apply to the .gitignore.
     *
     * @return string
     */
    public function getGitignoreTemplate() : string
    {
        return $this->gitignoreTemplate;
    }
    /**
     * The desired language or platform to apply to the .gitignore.
     *
     * @param string $gitignoreTemplate
     *
     * @return self
     */
    public function setGitignoreTemplate(string $gitignoreTemplate) : self
    {
        $this->initialized['gitignoreTemplate'] = true;
        $this->gitignoreTemplate = $gitignoreTemplate;
        return $this;
    }
    /**
     * The license keyword of the open source license for this repository.
     *
     * @return string
     */
    public function getLicenseTemplate() : string
    {
        return $this->licenseTemplate;
    }
    /**
     * The license keyword of the open source license for this repository.
     *
     * @param string $licenseTemplate
     *
     * @return self
     */
    public function setLicenseTemplate(string $licenseTemplate) : self
    {
        $this->initialized['licenseTemplate'] = true;
        $this->licenseTemplate = $licenseTemplate;
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
}