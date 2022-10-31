<?php

namespace Github\Model;

class ReposOwnerRepoPatchBody extends \ArrayObject
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
    * Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://help.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://help.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    *
    * @var bool
    */
    protected $private = false;
    /**
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. The `visibility` parameter overrides the `private` parameter when you use both along with the `nebula-preview` preview header.
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
     * Updates the default branch for this repository.
     *
     * @var string
     */
    protected $defaultBranch;
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
     * `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
     *
     * @var bool
     */
    protected $archived = false;
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
    * Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://help.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://help.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    *
    * @return bool
    */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
    * Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://help.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://help.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
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
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. The `visibility` parameter overrides the `private` parameter when you use both along with the `nebula-preview` preview header.
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. The `visibility` parameter overrides the `private` parameter when you use both along with the `nebula-preview` preview header.
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
        $this->initialized['hasIssues'] = true;
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
        $this->initialized['hasProjects'] = true;
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
        $this->initialized['hasWiki'] = true;
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
        $this->initialized['isTemplate'] = true;
        $this->isTemplate = $isTemplate;
        return $this;
    }
    /**
     * Updates the default branch for this repository.
     *
     * @return string
     */
    public function getDefaultBranch() : string
    {
        return $this->defaultBranch;
    }
    /**
     * Updates the default branch for this repository.
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
        $this->initialized['allowSquashMerge'] = true;
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
        $this->initialized['allowMergeCommit'] = true;
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
        $this->initialized['allowRebaseMerge'] = true;
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
        $this->initialized['deleteBranchOnMerge'] = true;
        $this->deleteBranchOnMerge = $deleteBranchOnMerge;
        return $this;
    }
    /**
     * `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
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
}