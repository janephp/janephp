<?php

namespace Github\Model;

class BranchProtection extends \ArrayObject
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
    protected $url;
    /**
     * 
     *
     * @var BranchProtectionRequiredStatusChecks
     */
    protected $requiredStatusChecks;
    /**
     * Protected Branch Admin Enforced
     *
     * @var ProtectedBranchAdminEnforced
     */
    protected $enforceAdmins;
    /**
     * Protected Branch Pull Request Review
     *
     * @var ProtectedBranchPullRequestReview
     */
    protected $requiredPullRequestReviews;
    /**
     * Branch Restriction Policy
     *
     * @var BranchRestrictionPolicy
     */
    protected $restrictions;
    /**
     * 
     *
     * @var BranchProtectionRequiredLinearHistory
     */
    protected $requiredLinearHistory;
    /**
     * 
     *
     * @var BranchProtectionAllowForcePushes
     */
    protected $allowForcePushes;
    /**
     * 
     *
     * @var BranchProtectionAllowDeletions
     */
    protected $allowDeletions;
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
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
    protected $protectionUrl;
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
     * @return BranchProtectionRequiredStatusChecks
     */
    public function getRequiredStatusChecks() : BranchProtectionRequiredStatusChecks
    {
        return $this->requiredStatusChecks;
    }
    /**
     * 
     *
     * @param BranchProtectionRequiredStatusChecks $requiredStatusChecks
     *
     * @return self
     */
    public function setRequiredStatusChecks(BranchProtectionRequiredStatusChecks $requiredStatusChecks) : self
    {
        $this->initialized['requiredStatusChecks'] = true;
        $this->requiredStatusChecks = $requiredStatusChecks;
        return $this;
    }
    /**
     * Protected Branch Admin Enforced
     *
     * @return ProtectedBranchAdminEnforced
     */
    public function getEnforceAdmins() : ProtectedBranchAdminEnforced
    {
        return $this->enforceAdmins;
    }
    /**
     * Protected Branch Admin Enforced
     *
     * @param ProtectedBranchAdminEnforced $enforceAdmins
     *
     * @return self
     */
    public function setEnforceAdmins(ProtectedBranchAdminEnforced $enforceAdmins) : self
    {
        $this->initialized['enforceAdmins'] = true;
        $this->enforceAdmins = $enforceAdmins;
        return $this;
    }
    /**
     * Protected Branch Pull Request Review
     *
     * @return ProtectedBranchPullRequestReview
     */
    public function getRequiredPullRequestReviews() : ProtectedBranchPullRequestReview
    {
        return $this->requiredPullRequestReviews;
    }
    /**
     * Protected Branch Pull Request Review
     *
     * @param ProtectedBranchPullRequestReview $requiredPullRequestReviews
     *
     * @return self
     */
    public function setRequiredPullRequestReviews(ProtectedBranchPullRequestReview $requiredPullRequestReviews) : self
    {
        $this->initialized['requiredPullRequestReviews'] = true;
        $this->requiredPullRequestReviews = $requiredPullRequestReviews;
        return $this;
    }
    /**
     * Branch Restriction Policy
     *
     * @return BranchRestrictionPolicy
     */
    public function getRestrictions() : BranchRestrictionPolicy
    {
        return $this->restrictions;
    }
    /**
     * Branch Restriction Policy
     *
     * @param BranchRestrictionPolicy $restrictions
     *
     * @return self
     */
    public function setRestrictions(BranchRestrictionPolicy $restrictions) : self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * 
     *
     * @return BranchProtectionRequiredLinearHistory
     */
    public function getRequiredLinearHistory() : BranchProtectionRequiredLinearHistory
    {
        return $this->requiredLinearHistory;
    }
    /**
     * 
     *
     * @param BranchProtectionRequiredLinearHistory $requiredLinearHistory
     *
     * @return self
     */
    public function setRequiredLinearHistory(BranchProtectionRequiredLinearHistory $requiredLinearHistory) : self
    {
        $this->initialized['requiredLinearHistory'] = true;
        $this->requiredLinearHistory = $requiredLinearHistory;
        return $this;
    }
    /**
     * 
     *
     * @return BranchProtectionAllowForcePushes
     */
    public function getAllowForcePushes() : BranchProtectionAllowForcePushes
    {
        return $this->allowForcePushes;
    }
    /**
     * 
     *
     * @param BranchProtectionAllowForcePushes $allowForcePushes
     *
     * @return self
     */
    public function setAllowForcePushes(BranchProtectionAllowForcePushes $allowForcePushes) : self
    {
        $this->initialized['allowForcePushes'] = true;
        $this->allowForcePushes = $allowForcePushes;
        return $this;
    }
    /**
     * 
     *
     * @return BranchProtectionAllowDeletions
     */
    public function getAllowDeletions() : BranchProtectionAllowDeletions
    {
        return $this->allowDeletions;
    }
    /**
     * 
     *
     * @param BranchProtectionAllowDeletions $allowDeletions
     *
     * @return self
     */
    public function setAllowDeletions(BranchProtectionAllowDeletions $allowDeletions) : self
    {
        $this->initialized['allowDeletions'] = true;
        $this->allowDeletions = $allowDeletions;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProtectionUrl() : string
    {
        return $this->protectionUrl;
    }
    /**
     * 
     *
     * @param string $protectionUrl
     *
     * @return self
     */
    public function setProtectionUrl(string $protectionUrl) : self
    {
        $this->initialized['protectionUrl'] = true;
        $this->protectionUrl = $protectionUrl;
        return $this;
    }
}