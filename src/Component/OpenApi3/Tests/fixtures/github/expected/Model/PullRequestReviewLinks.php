<?php

namespace Github\Model;

class PullRequestReviewLinks extends \ArrayObject
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
     * @var PullRequestReviewLinksHtml
     */
    protected $html;
    /**
     * 
     *
     * @var PullRequestReviewLinksPullRequest
     */
    protected $pullRequest;
    /**
     * 
     *
     * @return PullRequestReviewLinksHtml
     */
    public function getHtml() : PullRequestReviewLinksHtml
    {
        return $this->html;
    }
    /**
     * 
     *
     * @param PullRequestReviewLinksHtml $html
     *
     * @return self
     */
    public function setHtml(PullRequestReviewLinksHtml $html) : self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewLinksPullRequest
     */
    public function getPullRequest() : PullRequestReviewLinksPullRequest
    {
        return $this->pullRequest;
    }
    /**
     * 
     *
     * @param PullRequestReviewLinksPullRequest $pullRequest
     *
     * @return self
     */
    public function setPullRequest(PullRequestReviewLinksPullRequest $pullRequest) : self
    {
        $this->initialized['pullRequest'] = true;
        $this->pullRequest = $pullRequest;
        return $this;
    }
}