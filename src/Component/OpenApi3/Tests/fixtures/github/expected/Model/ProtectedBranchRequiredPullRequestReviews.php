<?php

namespace Github\Model;

class ProtectedBranchRequiredPullRequestReviews extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var bool
     */
    protected $dismissStaleReviews;
    /**
     * 
     *
     * @var bool
     */
    protected $requireCodeOwnerReviews;
    /**
     * 
     *
     * @var int
     */
    protected $requiredApprovingReviewCount;
    /**
     * 
     *
     * @var ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions
     */
    protected $dismissalRestrictions;
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
     * @return bool
     */
    public function getDismissStaleReviews() : bool
    {
        return $this->dismissStaleReviews;
    }
    /**
     * 
     *
     * @param bool $dismissStaleReviews
     *
     * @return self
     */
    public function setDismissStaleReviews(bool $dismissStaleReviews) : self
    {
        $this->dismissStaleReviews = $dismissStaleReviews;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequireCodeOwnerReviews() : bool
    {
        return $this->requireCodeOwnerReviews;
    }
    /**
     * 
     *
     * @param bool $requireCodeOwnerReviews
     *
     * @return self
     */
    public function setRequireCodeOwnerReviews(bool $requireCodeOwnerReviews) : self
    {
        $this->requireCodeOwnerReviews = $requireCodeOwnerReviews;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRequiredApprovingReviewCount() : int
    {
        return $this->requiredApprovingReviewCount;
    }
    /**
     * 
     *
     * @param int $requiredApprovingReviewCount
     *
     * @return self
     */
    public function setRequiredApprovingReviewCount(int $requiredApprovingReviewCount) : self
    {
        $this->requiredApprovingReviewCount = $requiredApprovingReviewCount;
        return $this;
    }
    /**
     * 
     *
     * @return ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions
     */
    public function getDismissalRestrictions() : ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions
    {
        return $this->dismissalRestrictions;
    }
    /**
     * 
     *
     * @param ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions $dismissalRestrictions
     *
     * @return self
     */
    public function setDismissalRestrictions(ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions $dismissalRestrictions) : self
    {
        $this->dismissalRestrictions = $dismissalRestrictions;
        return $this;
    }
}