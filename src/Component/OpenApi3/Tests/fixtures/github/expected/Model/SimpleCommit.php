<?php

namespace Github\Model;

class SimpleCommit extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $treeId;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var SimpleCommitAuthor|null
     */
    protected $author;
    /**
     * 
     *
     * @var SimpleCommitCommitter|null
     */
    protected $committer;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTreeId() : string
    {
        return $this->treeId;
    }
    /**
     * 
     *
     * @param string $treeId
     *
     * @return self
     */
    public function setTreeId(string $treeId) : self
    {
        $this->initialized['treeId'] = true;
        $this->treeId = $treeId;
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
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return SimpleCommitAuthor|null
     */
    public function getAuthor() : ?SimpleCommitAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param SimpleCommitAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?SimpleCommitAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return SimpleCommitCommitter|null
     */
    public function getCommitter() : ?SimpleCommitCommitter
    {
        return $this->committer;
    }
    /**
     * 
     *
     * @param SimpleCommitCommitter|null $committer
     *
     * @return self
     */
    public function setCommitter(?SimpleCommitCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
        return $this;
    }
}