<?php

namespace Github\Model;

class PullRequestReviewComment extends \ArrayObject
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
     * URL for the pull request review comment
     *
     * @var string
     */
    protected $url;
    /**
     * The ID of the pull request review to which the comment belongs.
     *
     * @var int|null
     */
    protected $pullRequestReviewId;
    /**
     * The ID of the pull request review comment.
     *
     * @var int
     */
    protected $id;
    /**
     * The node ID of the pull request review comment.
     *
     * @var string
     */
    protected $nodeId;
    /**
     * The diff of the line that the comment refers to.
     *
     * @var string
     */
    protected $diffHunk;
    /**
     * The relative path of the file to which the comment applies.
     *
     * @var string
     */
    protected $path;
    /**
     * The line index in the diff to which the comment applies.
     *
     * @var int
     */
    protected $position;
    /**
     * The index of the original line in the diff to which the comment applies.
     *
     * @var int
     */
    protected $originalPosition;
    /**
     * The SHA of the commit to which the comment applies.
     *
     * @var string
     */
    protected $commitId;
    /**
     * The SHA of the original commit to which the comment applies.
     *
     * @var string
     */
    protected $originalCommitId;
    /**
     * The comment ID to reply to.
     *
     * @var int
     */
    protected $inReplyToId;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $user;
    /**
     * The text of the comment.
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
     * HTML URL for the pull request review comment.
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * URL for the pull request that the review comment belongs to.
     *
     * @var string
     */
    protected $pullRequestUrl;
    /**
     * How the author of the comment is associated with the pull request.
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * 
     *
     * @var PullRequestReviewCommentLinks
     */
    protected $links;
    /**
     * The first line of the range for a multi-line comment.
     *
     * @var int|null
     */
    protected $startLine;
    /**
     * The first line of the range for a multi-line comment.
     *
     * @var int|null
     */
    protected $originalStartLine;
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
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @var int
     */
    protected $originalLine;
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     *
     * @var string
     */
    protected $side = 'RIGHT';
    /**
     * 
     *
     * @var ReactionRollup
     */
    protected $reactions;
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
     * URL for the pull request review comment
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the pull request review comment
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
     * The ID of the pull request review to which the comment belongs.
     *
     * @return int|null
     */
    public function getPullRequestReviewId() : ?int
    {
        return $this->pullRequestReviewId;
    }
    /**
     * The ID of the pull request review to which the comment belongs.
     *
     * @param int|null $pullRequestReviewId
     *
     * @return self
     */
    public function setPullRequestReviewId(?int $pullRequestReviewId) : self
    {
        $this->initialized['pullRequestReviewId'] = true;
        $this->pullRequestReviewId = $pullRequestReviewId;
        return $this;
    }
    /**
     * The ID of the pull request review comment.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID of the pull request review comment.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The node ID of the pull request review comment.
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * The node ID of the pull request review comment.
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * The diff of the line that the comment refers to.
     *
     * @return string
     */
    public function getDiffHunk() : string
    {
        return $this->diffHunk;
    }
    /**
     * The diff of the line that the comment refers to.
     *
     * @param string $diffHunk
     *
     * @return self
     */
    public function setDiffHunk(string $diffHunk) : self
    {
        $this->initialized['diffHunk'] = true;
        $this->diffHunk = $diffHunk;
        return $this;
    }
    /**
     * The relative path of the file to which the comment applies.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The relative path of the file to which the comment applies.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The line index in the diff to which the comment applies.
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * The line index in the diff to which the comment applies.
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * The index of the original line in the diff to which the comment applies.
     *
     * @return int
     */
    public function getOriginalPosition() : int
    {
        return $this->originalPosition;
    }
    /**
     * The index of the original line in the diff to which the comment applies.
     *
     * @param int $originalPosition
     *
     * @return self
     */
    public function setOriginalPosition(int $originalPosition) : self
    {
        $this->initialized['originalPosition'] = true;
        $this->originalPosition = $originalPosition;
        return $this;
    }
    /**
     * The SHA of the commit to which the comment applies.
     *
     * @return string
     */
    public function getCommitId() : string
    {
        return $this->commitId;
    }
    /**
     * The SHA of the commit to which the comment applies.
     *
     * @param string $commitId
     *
     * @return self
     */
    public function setCommitId(string $commitId) : self
    {
        $this->initialized['commitId'] = true;
        $this->commitId = $commitId;
        return $this;
    }
    /**
     * The SHA of the original commit to which the comment applies.
     *
     * @return string
     */
    public function getOriginalCommitId() : string
    {
        return $this->originalCommitId;
    }
    /**
     * The SHA of the original commit to which the comment applies.
     *
     * @param string $originalCommitId
     *
     * @return self
     */
    public function setOriginalCommitId(string $originalCommitId) : self
    {
        $this->initialized['originalCommitId'] = true;
        $this->originalCommitId = $originalCommitId;
        return $this;
    }
    /**
     * The comment ID to reply to.
     *
     * @return int
     */
    public function getInReplyToId() : int
    {
        return $this->inReplyToId;
    }
    /**
     * The comment ID to reply to.
     *
     * @param int $inReplyToId
     *
     * @return self
     */
    public function setInReplyToId(int $inReplyToId) : self
    {
        $this->initialized['inReplyToId'] = true;
        $this->inReplyToId = $inReplyToId;
        return $this;
    }
    /**
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getUser() : ?SimpleUser
    {
        return $this->user;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $user
     *
     * @return self
     */
    public function setUser(?SimpleUser $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * The text of the comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The text of the comment.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->initialized['body'] = true;
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
        $this->initialized['createdAt'] = true;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * HTML URL for the pull request review comment.
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * HTML URL for the pull request review comment.
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * URL for the pull request that the review comment belongs to.
     *
     * @return string
     */
    public function getPullRequestUrl() : string
    {
        return $this->pullRequestUrl;
    }
    /**
     * URL for the pull request that the review comment belongs to.
     *
     * @param string $pullRequestUrl
     *
     * @return self
     */
    public function setPullRequestUrl(string $pullRequestUrl) : self
    {
        $this->initialized['pullRequestUrl'] = true;
        $this->pullRequestUrl = $pullRequestUrl;
        return $this;
    }
    /**
     * How the author of the comment is associated with the pull request.
     *
     * @return string
     */
    public function getAuthorAssociation() : string
    {
        return $this->authorAssociation;
    }
    /**
     * How the author of the comment is associated with the pull request.
     *
     * @param string $authorAssociation
     *
     * @return self
     */
    public function setAuthorAssociation(string $authorAssociation) : self
    {
        $this->initialized['authorAssociation'] = true;
        $this->authorAssociation = $authorAssociation;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewCommentLinks
     */
    public function getLinks() : PullRequestReviewCommentLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PullRequestReviewCommentLinks $links
     *
     * @return self
     */
    public function setLinks(PullRequestReviewCommentLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
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
        $this->initialized['startLine'] = true;
        $this->startLine = $startLine;
        return $this;
    }
    /**
     * The first line of the range for a multi-line comment.
     *
     * @return int|null
     */
    public function getOriginalStartLine() : ?int
    {
        return $this->originalStartLine;
    }
    /**
     * The first line of the range for a multi-line comment.
     *
     * @param int|null $originalStartLine
     *
     * @return self
     */
    public function setOriginalStartLine(?int $originalStartLine) : self
    {
        $this->initialized['originalStartLine'] = true;
        $this->originalStartLine = $originalStartLine;
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
        $this->initialized['startSide'] = true;
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
        $this->initialized['line'] = true;
        $this->line = $line;
        return $this;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @return int
     */
    public function getOriginalLine() : int
    {
        return $this->originalLine;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     *
     * @param int $originalLine
     *
     * @return self
     */
    public function setOriginalLine(int $originalLine) : self
    {
        $this->initialized['originalLine'] = true;
        $this->originalLine = $originalLine;
        return $this;
    }
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     *
     * @return string
     */
    public function getSide() : string
    {
        return $this->side;
    }
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     *
     * @param string $side
     *
     * @return self
     */
    public function setSide(string $side) : self
    {
        $this->initialized['side'] = true;
        $this->side = $side;
        return $this;
    }
    /**
     * 
     *
     * @return ReactionRollup
     */
    public function getReactions() : ReactionRollup
    {
        return $this->reactions;
    }
    /**
     * 
     *
     * @param ReactionRollup $reactions
     *
     * @return self
     */
    public function setReactions(ReactionRollup $reactions) : self
    {
        $this->initialized['reactions'] = true;
        $this->reactions = $reactions;
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
        $this->initialized['bodyHtml'] = true;
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
        $this->initialized['bodyText'] = true;
        $this->bodyText = $bodyText;
        return $this;
    }
}