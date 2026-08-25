<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class PullRequestReviewCommentLinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var PullRequestReviewCommentLinksSelf
     */
    protected $self;
    /**
     * @var PullRequestReviewCommentLinksHtml
     */
    protected $html;
    /**
     * @var PullRequestReviewCommentLinksPullRequest
     */
    protected $pullRequest;
    /**
     * @return PullRequestReviewCommentLinksSelf
     */
    public function getSelf(): PullRequestReviewCommentLinksSelf
    {
        return $this->self;
    }
    /**
     * @param PullRequestReviewCommentLinksSelf $self
     *
     * @return self
     */
    public function setSelf(PullRequestReviewCommentLinksSelf $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * @return PullRequestReviewCommentLinksHtml
     */
    public function getHtml(): PullRequestReviewCommentLinksHtml
    {
        return $this->html;
    }
    /**
     * @param PullRequestReviewCommentLinksHtml $html
     *
     * @return self
     */
    public function setHtml(PullRequestReviewCommentLinksHtml $html): self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
    /**
     * @return PullRequestReviewCommentLinksPullRequest
     */
    public function getPullRequest(): PullRequestReviewCommentLinksPullRequest
    {
        return $this->pullRequest;
    }
    /**
     * @param PullRequestReviewCommentLinksPullRequest $pullRequest
     *
     * @return self
     */
    public function setPullRequest(PullRequestReviewCommentLinksPullRequest $pullRequest): self
    {
        $this->initialized['pullRequest'] = true;
        $this->pullRequest = $pullRequest;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['self' => ['self', 'getSelf', 'setSelf'], 'html' => ['html', 'getHtml', 'setHtml'], 'pullRequest' => ['pull_request', 'getPullRequest', 'setPullRequest']];
    }
}