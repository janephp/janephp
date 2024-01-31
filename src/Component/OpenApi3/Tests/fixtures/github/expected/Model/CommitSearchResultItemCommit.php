<?php

namespace Github\Model;

class CommitSearchResultItemCommit extends \ArrayObject
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
     * @var CommitSearchResultItemCommitAuthor
     */
    protected $author;
    /**
     * 
     *
     * @var CommitSearchResultItemCommitCommitter|null
     */
    protected $committer;
    /**
     * 
     *
     * @var int
     */
    protected $commentCount;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var CommitSearchResultItemCommitTree
     */
    protected $tree;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var Verification
     */
    protected $verification;
    /**
     * 
     *
     * @return CommitSearchResultItemCommitAuthor
     */
    public function getAuthor() : CommitSearchResultItemCommitAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param CommitSearchResultItemCommitAuthor $author
     *
     * @return self
     */
    public function setAuthor(CommitSearchResultItemCommitAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return CommitSearchResultItemCommitCommitter|null
     */
    public function getCommitter() : ?CommitSearchResultItemCommitCommitter
    {
        return $this->committer;
    }
    /**
     * 
     *
     * @param CommitSearchResultItemCommitCommitter|null $committer
     *
     * @return self
     */
    public function setCommitter(?CommitSearchResultItemCommitCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
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
     * @return CommitSearchResultItemCommitTree
     */
    public function getTree() : CommitSearchResultItemCommitTree
    {
        return $this->tree;
    }
    /**
     * 
     *
     * @param CommitSearchResultItemCommitTree $tree
     *
     * @return self
     */
    public function setTree(CommitSearchResultItemCommitTree $tree) : self
    {
        $this->initialized['tree'] = true;
        $this->tree = $tree;
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