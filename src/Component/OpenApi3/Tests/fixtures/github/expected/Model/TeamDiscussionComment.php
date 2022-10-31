<?php

namespace Github\Model;

class TeamDiscussionComment extends \ArrayObject
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
     * 
     *
     * @var TeamDiscussionCommentAuthor|null
     */
    protected $author;
    /**
     * The main text of the comment.
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
    protected $discussionUrl;
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
     * The unique sequence number of a team discussion comment.
     *
     * @var int
     */
    protected $number;
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
     * @return TeamDiscussionCommentAuthor|null
     */
    public function getAuthor() : ?TeamDiscussionCommentAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param TeamDiscussionCommentAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?TeamDiscussionCommentAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * The main text of the comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The main text of the comment.
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
        $this->initialized['bodyVersion'] = true;
        $this->bodyVersion = $bodyVersion;
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
        $this->initialized['lastEditedAt'] = true;
        $this->lastEditedAt = $lastEditedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiscussionUrl() : string
    {
        return $this->discussionUrl;
    }
    /**
     * 
     *
     * @param string $discussionUrl
     *
     * @return self
     */
    public function setDiscussionUrl(string $discussionUrl) : self
    {
        $this->initialized['discussionUrl'] = true;
        $this->discussionUrl = $discussionUrl;
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
        $this->initialized['htmlUrl'] = true;
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
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * The unique sequence number of a team discussion comment.
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * The unique sequence number of a team discussion comment.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
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
}