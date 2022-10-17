<?php

namespace Github\Model;

class PullRequestReview extends \ArrayObject
{
    /**
     * Unique identifier of the review
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var PullRequestReviewUser|null
     */
    protected $user;
    /**
     * The text of the review.
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $pullRequestUrl;
    /**
     * 
     *
     * @var PullRequestReviewLinks
     */
    protected $links;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $submittedAt;
    /**
     * A commit SHA for the review.
     *
     * @var string
     */
    protected $commitId;
    /**
     * 
     *
     * @var string
     */
    protected $bodyHtml;
    /**
     * 
     *
     * @var string
     */
    protected $bodyText;
    /**
     * 
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * Unique identifier of the review
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the review
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewUser|null
     */
    public function getUser() : ?PullRequestReviewUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PullRequestReviewUser|null $user
     *
     * @return self
     */
    public function setUser(?PullRequestReviewUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * The text of the review.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The text of the review.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPullRequestUrl() : string
    {
        return $this->pullRequestUrl;
    }
    /**
     * 
     *
     * @param string $pullRequestUrl
     *
     * @return self
     */
    public function setPullRequestUrl(string $pullRequestUrl) : self
    {
        $this->pullRequestUrl = $pullRequestUrl;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewLinks
     */
    public function getLinks() : PullRequestReviewLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PullRequestReviewLinks $links
     *
     * @return self
     */
    public function setLinks(PullRequestReviewLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSubmittedAt() : \DateTime
    {
        return $this->submittedAt;
    }
    /**
     * 
     *
     * @param \DateTime $submittedAt
     *
     * @return self
     */
    public function setSubmittedAt(\DateTime $submittedAt) : self
    {
        $this->submittedAt = $submittedAt;
        return $this;
    }
    /**
     * A commit SHA for the review.
     *
     * @return string
     */
    public function getCommitId() : string
    {
        return $this->commitId;
    }
    /**
     * A commit SHA for the review.
     *
     * @param string $commitId
     *
     * @return self
     */
    public function setCommitId(string $commitId) : self
    {
        $this->commitId = $commitId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyHtml() : string
    {
        return $this->bodyHtml;
    }
    /**
     * 
     *
     * @param string $bodyHtml
     *
     * @return self
     */
    public function setBodyHtml(string $bodyHtml) : self
    {
        $this->bodyHtml = $bodyHtml;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyText() : string
    {
        return $this->bodyText;
    }
    /**
     * 
     *
     * @param string $bodyText
     *
     * @return self
     */
    public function setBodyText(string $bodyText) : self
    {
        $this->bodyText = $bodyText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorAssociation() : string
    {
        return $this->authorAssociation;
    }
    /**
     * 
     *
     * @param string $authorAssociation
     *
     * @return self
     */
    public function setAuthorAssociation(string $authorAssociation) : self
    {
        $this->authorAssociation = $authorAssociation;
        return $this;
    }
}