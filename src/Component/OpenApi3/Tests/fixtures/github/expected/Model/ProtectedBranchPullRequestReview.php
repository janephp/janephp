<?php

namespace Github\Model;

class ProtectedBranchPullRequestReview extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var ProtectedBranchPullRequestReviewDismissalRestrictions
     */
    protected $dismissalRestrictions;
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
     * @return ProtectedBranchPullRequestReviewDismissalRestrictions
     */
    public function getDismissalRestrictions() : ProtectedBranchPullRequestReviewDismissalRestrictions
    {
        return $this->dismissalRestrictions;
    }
    /**
     * 
     *
     * @param ProtectedBranchPullRequestReviewDismissalRestrictions $dismissalRestrictions
     *
     * @return self
     */
    public function setDismissalRestrictions(ProtectedBranchPullRequestReviewDismissalRestrictions $dismissalRestrictions) : self
    {
        $this->initialized['dismissalRestrictions'] = true;
        $this->dismissalRestrictions = $dismissalRestrictions;
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
        $this->initialized['dismissStaleReviews'] = true;
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
        $this->initialized['requireCodeOwnerReviews'] = true;
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
        $this->initialized['requiredApprovingReviewCount'] = true;
        $this->requiredApprovingReviewCount = $requiredApprovingReviewCount;
        return $this;
    }
}