<?php

namespace Github\Model;

class CommitCommit extends \ArrayObject
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
     * @var CommitCommitAuthor|null
     */
    protected $author;
    /**
     * 
     *
     * @var CommitCommitCommitter|null
     */
    protected $committer;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var int
     */
    protected $commentCount;
    /**
     * 
     *
     * @var CommitCommitTree
     */
    protected $tree;
    /**
     * 
     *
     * @var Verification
     */
    protected $verification;
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
     * @return CommitCommitAuthor|null
     */
    public function getAuthor() : ?CommitCommitAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param CommitCommitAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?CommitCommitAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return CommitCommitCommitter|null
     */
    public function getCommitter() : ?CommitCommitCommitter
    {
        return $this->committer;
    }
    /**
     * 
     *
     * @param CommitCommitCommitter|null $committer
     *
     * @return self
     */
    public function setCommitter(?CommitCommitCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCommentCount() : int
    {
        return $this->commentCount;
    }
    /**
     * 
     *
     * @param int $commentCount
     *
     * @return self
     */
    public function setCommentCount(int $commentCount) : self
    {
        $this->initialized['commentCount'] = true;
        $this->commentCount = $commentCount;
        return $this;
    }
    /**
     * 
     *
     * @return CommitCommitTree
     */
    public function getTree() : CommitCommitTree
    {
        return $this->tree;
    }
    /**
     * 
     *
     * @param CommitCommitTree $tree
     *
     * @return self
     */
    public function setTree(CommitCommitTree $tree) : self
    {
        $this->initialized['tree'] = true;
        $this->tree = $tree;
        return $this;
    }
    /**
     * 
     *
     * @return Verification
     */
    public function getVerification() : Verification
    {
        return $this->verification;
    }
    /**
     * 
     *
     * @param Verification $verification
     *
     * @return self
     */
    public function setVerification(Verification $verification) : self
    {
        $this->initialized['verification'] = true;
        $this->verification = $verification;
        return $this;
    }
}