<?php

namespace Github\Model;

class TeamDiscussion
{
    /**
     * 
     *
     * @var TeamDiscussionAuthor|null
     */
    protected $author;
    /**
     * The main text of the discussion.
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var string
     */
    protected $bodyHtml;
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     *
     * @var string
     */
    protected $bodyVersion;
    /**
     * 
     *
     * @var int
     */
    protected $commentsCount;
    /**
     * 
     *
     * @var string
     */
    protected $commentsUrl;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastEditedAt;
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
    protected $nodeId;
    /**
     * The unique sequence number of a team discussion.
     *
     * @var int
     */
    protected $number;
    /**
     * Whether or not this discussion should be pinned for easy retrieval.
     *
     * @var bool
     */
    protected $pinned;
    /**
     * Whether or not this discussion should be restricted to team members and organization administrators.
     *
     * @var bool
     */
    protected $private;
    /**
     * 
     *
     * @var string
     */
    protected $teamUrl;
    /**
     * The title of the discussion.
     *
     * @var string
     */
    protected $title;
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
    protected $url;
    /**
     * 
     *
     * @var ReactionRollup
     */
    protected $reactions;
    /**
     * 
     *
     * @return TeamDiscussionAuthor|null
     */
    public function getAuthor() : ?TeamDiscussionAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param TeamDiscussionAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?TeamDiscussionAuthor $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * The main text of the discussion.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The main text of the discussion.
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
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     *
     * @return string
     */
    public function getBodyVersion() : string
    {
        return $this->bodyVersion;
    }
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     *
     * @param string $bodyVersion
     *
     * @return self
     */
    public function setBodyVersion(string $bodyVersion) : self
    {
        $this->bodyVersion = $bodyVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCommentsCount() : int
    {
        return $this->commentsCount;
    }
    /**
     * 
     *
     * @param int $commentsCount
     *
     * @return self
     */
    public function setCommentsCount(int $commentsCount) : self
    {
        $this->commentsCount = $commentsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommentsUrl() : string
    {
        return $this->commentsUrl;
    }
    /**
     * 
     *
     * @param string $commentsUrl
     *
     * @return self
     */
    public function setCommentsUrl(string $commentsUrl) : self
    {
        $this->commentsUrl = $commentsUrl;
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
     * @return \DateTime|null
     */
    public function getLastEditedAt() : ?\DateTime
    {
        return $this->lastEditedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastEditedAt
     *
     * @return self
     */
    public function setLastEditedAt(?\DateTime $lastEditedAt) : self
    {
        $this->lastEditedAt = $lastEditedAt;
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
     * The unique sequence number of a team discussion.
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * The unique sequence number of a team discussion.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Whether or not this discussion should be pinned for easy retrieval.
     *
     * @return bool
     */
    public function getPinned() : bool
    {
        return $this->pinned;
    }
    /**
     * Whether or not this discussion should be pinned for easy retrieval.
     *
     * @param bool $pinned
     *
     * @return self
     */
    public function setPinned(bool $pinned) : self
    {
        $this->pinned = $pinned;
        return $this;
    }
    /**
     * Whether or not this discussion should be restricted to team members and organization administrators.
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * Whether or not this discussion should be restricted to team members and organization administrators.
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->private = $private;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamUrl() : string
    {
        return $this->teamUrl;
    }
    /**
     * 
     *
     * @param string $teamUrl
     *
     * @return self
     */
    public function setTeamUrl(string $teamUrl) : self
    {
        $this->teamUrl = $teamUrl;
        return $this;
    }
    /**
     * The title of the discussion.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the discussion.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
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
        $this->reactions = $reactions;
        return $this;
    }
}