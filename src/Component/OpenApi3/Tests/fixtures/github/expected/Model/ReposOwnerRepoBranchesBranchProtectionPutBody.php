<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionPutBody extends \ArrayObject
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
     * Require status checks to pass before merging. Set to `null` to disable.
     *
     * @var ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks|null
     */
    protected $requiredStatusChecks;
    /**
     * Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable.
     *
     * @var bool|null
     */
    protected $enforceAdmins;
    /**
     * Require at least one approving review on a pull request, before merging. Set to `null` to disable.
     *
     * @var ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews|null
     */
    protected $requiredPullRequestReviews;
    /**
     * Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.
     *
     * @var ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions|null
     */
    protected $restrictions;
    /**
     * Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see "[Requiring a linear commit history](https://help.github.com/github/administering-a-repository/requiring-a-linear-commit-history)" in the GitHub Help documentation.
     *
     * @var bool
     */
    protected $requiredLinearHistory;
    /**
     * Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://help.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation."
     *
     * @var bool|null
     */
    protected $allowForcePushes;
    /**
     * Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://help.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation.
     *
     * @var bool
     */
    protected $allowDeletions;
    /**
     * Require status checks to pass before merging. Set to `null` to disable.
     *
     * @return ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks|null
     */
    public function getRequiredStatusChecks() : ?ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks
    {
        return $this->requiredStatusChecks;
    }
    /**
     * Require status checks to pass before merging. Set to `null` to disable.
     *
     * @param ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks|null $requiredStatusChecks
     *
     * @return self
     */
    public function setRequiredStatusChecks(?ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks $requiredStatusChecks) : self
    {
        $this->initialized['requiredStatusChecks'] = true;
        $this->requiredStatusChecks = $requiredStatusChecks;
        return $this;
    }
    /**
     * Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable.
     *
     * @return bool|null
     */
    public function getEnforceAdmins() : ?bool
    {
        return $this->enforceAdmins;
    }
    /**
     * Enforce all configured restrictions for administrators. Set to `true` to enforce required status checks for repository administrators. Set to `null` to disable.
     *
     * @param bool|null $enforceAdmins
     *
     * @return self
     */
    public function setEnforceAdmins(?bool $enforceAdmins) : self
    {
        $this->initialized['enforceAdmins'] = true;
        $this->enforceAdmins = $enforceAdmins;
        return $this;
    }
    /**
     * Require at least one approving review on a pull request, before merging. Set to `null` to disable.
     *
     * @return ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews|null
     */
    public function getRequiredPullRequestReviews() : ?ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews
    {
        return $this->requiredPullRequestReviews;
    }
    /**
     * Require at least one approving review on a pull request, before merging. Set to `null` to disable.
     *
     * @param ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews|null $requiredPullRequestReviews
     *
     * @return self
     */
    public function setRequiredPullRequestReviews(?ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews $requiredPullRequestReviews) : self
    {
        $this->initialized['requiredPullRequestReviews'] = true;
        $this->requiredPullRequestReviews = $requiredPullRequestReviews;
        return $this;
    }
    /**
     * Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.
     *
     * @return ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions|null
     */
    public function getRestrictions() : ?ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions
    {
        return $this->restrictions;
    }
    /**
     * Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.
     *
     * @param ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions|null $restrictions
     *
     * @return self
     */
    public function setRestrictions(?ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions $restrictions) : self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see "[Requiring a linear commit history](https://help.github.com/github/administering-a-repository/requiring-a-linear-commit-history)" in the GitHub Help documentation.
     *
     * @return bool
     */
    public function getRequiredLinearHistory() : bool
    {
        return $this->requiredLinearHistory;
    }
    /**
     * Enforces a linear commit Git history, which prevents anyone from pushing merge commits to a branch. Set to `true` to enforce a linear commit history. Set to `false` to disable a linear commit Git history. Your repository must allow squash merging or rebase merging before you can enable a linear commit history. Default: `false`. For more information, see "[Requiring a linear commit history](https://help.github.com/github/administering-a-repository/requiring-a-linear-commit-history)" in the GitHub Help documentation.
     *
     * @param bool $requiredLinearHistory
     *
     * @return self
     */
    public function setRequiredLinearHistory(bool $requiredLinearHistory) : self
    {
        $this->initialized['requiredLinearHistory'] = true;
        $this->requiredLinearHistory = $requiredLinearHistory;
        return $this;
    }
    /**
     * Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://help.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation."
     *
     * @return bool|null
     */
    public function getAllowForcePushes() : ?bool
    {
        return $this->allowForcePushes;
    }
    /**
     * Permits force pushes to the protected branch by anyone with write access to the repository. Set to `true` to allow force pushes. Set to `false` or `null` to block force pushes. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://help.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation."
     *
     * @param bool|null $allowForcePushes
     *
     * @return self
     */
    public function setAllowForcePushes(?bool $allowForcePushes) : self
    {
        $this->initialized['allowForcePushes'] = true;
        $this->allowForcePushes = $allowForcePushes;
        return $this;
    }
    /**
     * Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://help.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation.
     *
     * @return bool
     */
    public function getAllowDeletions() : bool
    {
        return $this->allowDeletions;
    }
    /**
     * Allows deletion of the protected branch by anyone with write access to the repository. Set to `false` to prevent deletion of the protected branch. Default: `false`. For more information, see "[Enabling force pushes to a protected branch](https://help.github.com/en/github/administering-a-repository/enabling-force-pushes-to-a-protected-branch)" in the GitHub Help documentation.
     *
     * @param bool $allowDeletions
     *
     * @return self
     */
    public function setAllowDeletions(bool $allowDeletions) : self
    {
        $this->initialized['allowDeletions'] = true;
        $this->allowDeletions = $allowDeletions;
        return $this;
    }
}