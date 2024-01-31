<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody extends \ArrayObject
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
     * Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     *
     * @var ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions
     */
    protected $dismissalRestrictions;
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     *
     * @var bool
     */
    protected $dismissStaleReviews;
    /**
     * Blocks merging pull requests until [code owners](https://help.github.com/articles/about-code-owners/) have reviewed.
     *
     * @var bool
     */
    protected $requireCodeOwnerReviews;
    /**
     * Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6.
     *
     * @var int
     */
    protected $requiredApprovingReviewCount;
    /**
     * Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     *
     * @return ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions
     */
    public function getDismissalRestrictions() : ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions
    {
        return $this->dismissalRestrictions;
    }
    /**
     * Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     *
     * @param ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions $dismissalRestrictions
     *
     * @return self
     */
    public function setDismissalRestrictions(ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions $dismissalRestrictions) : self
    {
        $this->initialized['dismissalRestrictions'] = true;
        $this->dismissalRestrictions = $dismissalRestrictions;
        return $this;
    }
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     *
     * @return bool
     */
    public function getDismissStaleReviews() : bool
    {
        return $this->dismissStaleReviews;
    }
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     *
     * @param bool $dismissStaleReviews
     *
     * @return self
     */
    public function setDismissStaleReviews(bool $dismissStaleReviews) : self
    {
        $this->initialized['dismissStaleReviews'] = true;
        $this->dismissStaleReviews = $dismissStaleReviews;
        return $this;
    }
    /**
     * Blocks merging pull requests until [code owners](https://help.github.com/articles/about-code-owners/) have reviewed.
     *
     * @return bool
     */
    public function getRequireCodeOwnerReviews() : bool
    {
        return $this->requireCodeOwnerReviews;
    }
    /**
     * Blocks merging pull requests until [code owners](https://help.github.com/articles/about-code-owners/) have reviewed.
     *
     * @param bool $requireCodeOwnerReviews
     *
     * @return self
     */
    public function setRequireCodeOwnerReviews(bool $requireCodeOwnerReviews) : self
    {
        $this->initialized['requireCodeOwnerReviews'] = true;
        $this->requireCodeOwnerReviews = $requireCodeOwnerReviews;
        return $this;
    }
    /**
     * Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6.
     *
     * @return int
     */
    public function getRequiredApprovingReviewCount() : int
    {
        return $this->requiredApprovingReviewCount;
    }
    /**
     * Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6.
     *
     * @param int $requiredApprovingReviewCount
     *
     * @return self
     */
    public function setRequiredApprovingReviewCount(int $requiredApprovingReviewCount) : self
    {
        $this->initialized['requiredApprovingReviewCount'] = true;
        $this->requiredApprovingReviewCount = $requiredApprovingReviewCount;
        return $this;
    }
}