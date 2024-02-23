<?php

namespace Github\Model;

class GitCommit extends \ArrayObject
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
     * SHA for the commit
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
     * Identifying information for the git-user
     *
     * @var GitCommitAuthor
     */
    protected $author;
    /**
     * Identifying information for the git-user
     *
     * @var GitCommitCommitter
     */
    protected $committer;
    /**
     * Message describing the purpose of the commit
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var GitCommitTree
     */
    protected $tree;
    /**
     * 
     *
     * @var list<GitCommitParentsItem>
     */
    protected $parents;
    /**
     * 
     *
     * @var GitCommitVerification
     */
    protected $verification;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * SHA for the commit
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * SHA for the commit
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
     * Identifying information for the git-user
     *
     * @return GitCommitAuthor
     */
    public function getAuthor() : GitCommitAuthor
    {
        return $this->author;
    }
    /**
     * Identifying information for the git-user
     *
     * @param GitCommitAuthor $author
     *
     * @return self
     */
    public function setAuthor(GitCommitAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * Identifying information for the git-user
     *
     * @return GitCommitCommitter
     */
    public function getCommitter() : GitCommitCommitter
    {
        return $this->committer;
    }
    /**
     * Identifying information for the git-user
     *
     * @param GitCommitCommitter $committer
     *
     * @return self
     */
    public function setCommitter(GitCommitCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
        return $this;
    }
    /**
     * Message describing the purpose of the commit
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Message describing the purpose of the commit
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
     * @return GitCommitTree
     */
    public function getTree() : GitCommitTree
    {
        return $this->tree;
    }
    /**
     * 
     *
     * @param GitCommitTree $tree
     *
     * @return self
     */
    public function setTree(GitCommitTree $tree) : self
    {
        $this->initialized['tree'] = true;
        $this->tree = $tree;
        return $this;
    }
    /**
     * 
     *
     * @return list<GitCommitParentsItem>
     */
    public function getParents() : array
    {
        return $this->parents;
    }
    /**
     * 
     *
     * @param list<GitCommitParentsItem> $parents
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
     * @return GitCommitVerification
     */
    public function getVerification() : GitCommitVerification
    {
        return $this->verification;
    }
    /**
     * 
     *
     * @param GitCommitVerification $verification
     *
     * @return self
     */
    public function setVerification(GitCommitVerification $verification) : self
    {
        $this->initialized['verification'] = true;
        $this->verification = $verification;
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
}