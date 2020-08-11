<?php

namespace Github\Model;

class OrgsOrgReposPostBody
{
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
     * Either `true` to create a private repository or `false` to create a public one.
     *
     * @var bool
     */
    protected $private = false;
    /**
    * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. For more information, see "[Creating an internal repository](https://help.github.com/en/github/creating-cloning-and-archiving-repositories/about-repository-visibility#about-internal-repositories)" in the GitHub Help documentation.  
    The `visibility` parameter overrides the `private` parameter when you use both parameters with the `nebula-preview` preview header.
    *
    * @var string
    */
    protected $visibility;
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     *
     * @var bool
     */
    protected $hasIssues = true;
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     *
     * @var bool
     */
    protected $hasProjects = true;
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     *
     * @var bool
     */
    protected $hasWiki = true;
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     *
     * @var bool
     */
    protected $isTemplate = false;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     *
     * @var int
     */
    protected $teamId;
    /**
     * Pass `true` to create an initial commit with empty README.
     *
     * @var bool
     */
    protected $autoInit = false;
    /**
     * Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
     *
     * @var string
     */
    protected $gitignoreTemplate;
    /**
     * Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://help.github.com/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
     *
     * @var string
     */
    protected $licenseTemplate;
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     *
     * @var bool
     */
    protected $allowSquashMerge = true;
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     *
     * @var bool
     */
    protected $allowMergeCommit = true;
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     *
     * @var bool
     */
    protected $allowRebaseMerge = true;
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     *
     * @var bool
     */
    protected $deleteBranchOnMerge = false;
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
        $this->homepage = $homepage;
        return $this;
    }
    /**
     * Either `true` to create a private repository or `false` to create a public one.
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * Either `true` to create a private repository or `false` to create a public one.
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
    * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. For more information, see "[Creating an internal repository](https://help.github.com/en/github/creating-cloning-and-archiving-repositories/about-repository-visibility#about-internal-repositories)" in the GitHub Help documentation.  
    The `visibility` parameter overrides the `private` parameter when you use both parameters with the `nebula-preview` preview header.
    *
    * @return string
    */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
    * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. For more information, see "[Creating an internal repository](https://help.github.com/en/github/creating-cloning-and-archiving-repositories/about-repository-visibility#about-internal-repositories)" in the GitHub Help documentation.  
    The `visibility` parameter overrides the `private` parameter when you use both parameters with the `nebula-preview` preview header.
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
     * Either `true` to enable issues for this repository or `false` to disable them.
     *
     * @return bool
     */
    public function getHasIssues() : bool
    {
        return $this->hasIssues;
    }
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
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
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     *
     * @return bool
     */
    public function getHasProjects() : bool
    {
        return $this->hasProjects;
    }
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
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
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     *
     * @return bool
     */
    public function getHasWiki() : bool
    {
        return $this->hasWiki;
    }
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
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
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     *
     * @return bool
     */
    public function getIsTemplate() : bool
    {
        return $this->isTemplate;
    }
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
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
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * Pass `true` to create an initial commit with empty README.
     *
     * @return bool
     */
    public function getAutoInit() : bool
    {
        return $this->autoInit;
    }
    /**
     * Pass `true` to create an initial commit with empty README.
     *
     * @param bool $autoInit
     *
     * @return self
     */
    public function setAutoInit(bool $autoInit) : self
    {
        $this->autoInit = $autoInit;
        return $this;
    }
    /**
     * Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
     *
     * @return string
     */
    public function getGitignoreTemplate() : string
    {
        return $this->gitignoreTemplate;
    }
    /**
     * Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
     *
     * @param string $gitignoreTemplate
     *
     * @return self
     */
    public function setGitignoreTemplate(string $gitignoreTemplate) : self
    {
        $this->gitignoreTemplate = $gitignoreTemplate;
        return $this;
    }
    /**
     * Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://help.github.com/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
     *
     * @return string
     */
    public function getLicenseTemplate() : string
    {
        return $this->licenseTemplate;
    }
    /**
     * Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://help.github.com/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
     *
     * @param string $licenseTemplate
     *
     * @return self
     */
    public function setLicenseTemplate(string $licenseTemplate) : self
    {
        $this->licenseTemplate = $licenseTemplate;
        return $this;
    }
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     *
     * @return bool
     */
    public function getAllowSquashMerge() : bool
    {
        return $this->allowSquashMerge;
    }
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
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
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     *
     * @return bool
     */
    public function getAllowMergeCommit() : bool
    {
        return $this->allowMergeCommit;
    }
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
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
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     *
     * @return bool
     */
    public function getAllowRebaseMerge() : bool
    {
        return $this->allowRebaseMerge;
    }
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
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
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     *
     * @return bool
     */
    public function getDeleteBranchOnMerge() : bool
    {
        return $this->deleteBranchOnMerge;
    }
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
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
}