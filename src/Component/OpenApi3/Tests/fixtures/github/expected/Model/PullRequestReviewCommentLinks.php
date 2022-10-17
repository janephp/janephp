<?php

namespace Github\Model;

class PullRequestReviewCommentLinks extends \ArrayObject
{
    /**
     * 
     *
     * @var PullRequestReviewCommentLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var PullRequestReviewCommentLinksHtml
     */
    protected $html;
    /**
     * 
     *
     * @var PullRequestReviewCommentLinksPullRequest
     */
    protected $pullRequest;
    /**
     * 
     *
     * @return PullRequestReviewCommentLinksSelf
     */
    public function getSelf() : PullRequestReviewCommentLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param PullRequestReviewCommentLinksSelf $self
     *
     * @return self
     */
    public function setSelf(PullRequestReviewCommentLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewCommentLinksHtml
     */
    public function getHtml() : PullRequestReviewCommentLinksHtml
    {
        return $this->html;
    }
    /**
     * 
     *
     * @param PullRequestReviewCommentLinksHtml $html
     *
     * @return self
     */
    public function setHtml(PullRequestReviewCommentLinksHtml $html) : self
    {
        $this->html = $html;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewCommentLinksPullRequest
     */
    public function getPullRequest() : PullRequestReviewCommentLinksPullRequest
    {
        return $this->pullRequest;
    }
    /**
     * 
     *
     * @param PullRequestReviewCommentLinksPullRequest $pullRequest
     *
     * @return self
     */
    public function setPullRequest(PullRequestReviewCommentLinksPullRequest $pullRequest) : self
    {
        $this->pullRequest = $pullRequest;
        return $this;
    }
}