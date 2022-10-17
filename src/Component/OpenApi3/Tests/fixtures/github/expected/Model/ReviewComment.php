<?php

namespace Github\Model;

class ReviewComment extends \ArrayObject
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
     * @var int|null
     */
    protected $pullRequestReviewId;
    /**
     * 
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
     * @var string
     */
    protected $diffHunk;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var int|null
     */
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $originalPosition;
    /**
     * 
     *
     * @var string
     */
    protected $commitId;
    /**
     * 
     *
     * @var string
     */
    protected $originalCommitId;
    /**
     * 
     *
     * @var int
     */
    protected $inReplyToId;
    /**
     * 
     *
     * @var ReviewCommentUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
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
     * @var string
     */
    protected $authorAssociation;
    /**
     * 
     *
     * @var ReviewCommentLinks
     */
    protected $links;
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
    protected $bodyHtml;
    /**
     * The side of the first line of the range for a multi-line comment.
     *
     * @var string
     */
    protected $side = 'RIGHT';
    /**
     * The side of the first line of the range for a multi-line comment.
     *
     * @var string|null
     */
    protected $startSide = 'RIGHT';
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @var int
     */
    protected $line;
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @var int
     */
    protected $originalLine;
    /**
     * The first line of the range for a multi-line comment.
     *
     * @var int|null
     */
    protected $startLine;
    /**
     * The original first line of the range for a multi-line comment.
     *
     * @var int|null
     */
    protected $originalStartLine;
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
     * @return int|null
     */
    public function getPullRequestReviewId() : ?int
    {
        return $this->pullRequestReviewId;
    }
    /**
     * 
     *
     * @param int|null $pullRequestReviewId
     *
     * @return self
     */
    public function setPullRequestReviewId(?int $pullRequestReviewId) : self
    {
        $this->pullRequestReviewId = $pullRequestReviewId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * @return string
     */
    public function getDiffHunk() : string
    {
        return $this->diffHunk;
    }
    /**
     * 
     *
     * @param string $diffHunk
     *
     * @return self
     */
    public function setDiffHunk(string $diffHunk) : self
    {
        $this->diffHunk = $diffHunk;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPosition() : ?int
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOriginalPosition() : int
    {
        return $this->originalPosition;
    }
    /**
     * 
     *
     * @param int $originalPosition
     *
     * @return self
     */
    public function setOriginalPosition(int $originalPosition) : self
    {
        $this->originalPosition = $originalPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommitId() : string
    {
        return $this->commitId;
    }
    /**
     * 
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
    public function getOriginalCommitId() : string
    {
        return $this->originalCommitId;
    }
    /**
     * 
     *
     * @param string $originalCommitId
     *
     * @return self
     */
    public function setOriginalCommitId(string $originalCommitId) : self
    {
        $this->originalCommitId = $originalCommitId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInReplyToId() : int
    {
        return $this->inReplyToId;
    }
    /**
     * 
     *
     * @param int $inReplyToId
     *
     * @return self
     */
    public function setInReplyToId(int $inReplyToId) : self
    {
        $this->inReplyToId = $inReplyToId;
        return $this;
    }
    /**
     * 
     *
     * @return ReviewCommentUser|null
     */
    public function getUser() : ?ReviewCommentUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param ReviewCommentUser|null $user
     *
     * @return self
     */
    public function setUser(?ReviewCommentUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * 
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
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
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
    /**
     * 
     *
     * @return ReviewCommentLinks
     */
    public function getLinks() : ReviewCommentLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ReviewCommentLinks $links
     *
     * @return self
     */
    public function setLinks(ReviewCommentLinks $links) : self
    {
        $this->links = $links;
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
     * The side of the first line of the range for a multi-line comment.
     *
     * @return string
     */
    public function getSide() : string
    {
        return $this->side;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     *
     * @param string $side
     *
     * @return self
     */
    public function setSide(string $side) : self
    {
        $this->side = $side;
        return $this;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     *
     * @return string|null
     */
    public function getStartSide() : ?string
    {
        return $this->startSide;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     *
     * @param string|null $startSide
     *
     * @return self
     */
    public function setStartSide(?string $startSide) : self
    {
        $this->startSide = $startSide;
        return $this;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @return int
     */
    public function getLine() : int
    {
        return $this->line;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @param int $line
     *
     * @return self
     */
    public function setLine(int $line) : self
    {
        $this->line = $line;
        return $this;
    }
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @return int
     */
    public function getOriginalLine() : int
    {
        return $this->originalLine;
    }
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @param int $originalLine
     *
     * @return self
     */
    public function setOriginalLine(int $originalLine) : self
    {
        $this->originalLine = $originalLine;
        return $this;
    }
    /**
     * The first line of the range for a multi-line comment.
     *
     * @return int|null
     */
    public function getStartLine() : ?int
    {
        return $this->startLine;
    }
    /**
     * The first line of the range for a multi-line comment.
     *
     * @param int|null $startLine
     *
     * @return self
     */
    public function setStartLine(?int $startLine) : self
    {
        $this->startLine = $startLine;
        return $this;
    }
    /**
     * The original first line of the range for a multi-line comment.
     *
     * @return int|null
     */
    public function getOriginalStartLine() : ?int
    {
        return $this->originalStartLine;
    }
    /**
     * The original first line of the range for a multi-line comment.
     *
     * @param int|null $originalStartLine
     *
     * @return self
     */
    public function setOriginalStartLine(?int $originalStartLine) : self
    {
        $this->originalStartLine = $originalStartLine;
        return $this;
    }
}