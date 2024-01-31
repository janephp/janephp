<?php

namespace Github\Model;

class FileCommitCommit extends \ArrayObject
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
    protected $sha;
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
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var FileCommitCommitAuthor
     */
    protected $author;
    /**
     * 
     *
     * @var FileCommitCommitCommitter
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
     * @var FileCommitCommitTree
     */
    protected $tree;
    /**
     * 
     *
     * @var FileCommitCommitParentsItem[]
     */
    protected $parents;
    /**
     * 
     *
     * @var FileCommitCommitVerification
     */
    protected $verification;
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
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
     * @return FileCommitCommitAuthor
     */
    public function getAuthor() : FileCommitCommitAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param FileCommitCommitAuthor $author
     *
     * @return self
     */
    public function setAuthor(FileCommitCommitAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return FileCommitCommitCommitter
     */
    public function getCommitter() : FileCommitCommitCommitter
    {
        return $this->committer;
    }
    /**
     * 
     *
     * @param FileCommitCommitCommitter $committer
     *
     * @return self
     */
    public function setCommitter(FileCommitCommitCommitter $committer) : self
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
     * @return FileCommitCommitTree
     */
    public function getTree() : FileCommitCommitTree
    {
        return $this->tree;
    }
    /**
     * 
     *
     * @param FileCommitCommitTree $tree
     *
     * @return self
     */
    public function setTree(FileCommitCommitTree $tree) : self
    {
        $this->initialized['tree'] = true;
        $this->tree = $tree;
        return $this;
    }
    /**
     * 
     *
     * @return FileCommitCommitParentsItem[]
     */
    public function getParents() : array
    {
        return $this->parents;
    }
    /**
     * 
     *
     * @param FileCommitCommitParentsItem[] $parents
     *
     * @return self
     */
    public function setParents(array $parents) : self
    {
        $this->initialized['parents'] = true;
        $this->parents = $parents;
        return $this;
    }
    /**
     * 
     *
     * @return FileCommitCommitVerification
     */
    public function getVerification() : FileCommitCommitVerification
    {
        return $this->verification;
    }
    /**
     * 
     *
     * @param FileCommitCommitVerification $verification
     *
     * @return self
     */
    public function setVerification(FileCommitCommitVerification $verification) : self
    {
        $this->initialized['verification'] = true;
        $this->verification = $verification;
        return $this;
    }
}