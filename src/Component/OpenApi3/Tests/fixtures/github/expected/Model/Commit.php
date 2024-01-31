<?php

namespace Github\Model;

class Commit extends \ArrayObject
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
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
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
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $commentsUrl;
    /**
     * 
     *
     * @var CommitCommit
     */
    protected $commit;
    /**
     * 
     *
     * @var CommitAuthor|null
     */
    protected $author;
    /**
     * 
     *
     * @var CommitCommitter|null
     */
    protected $committer;
    /**
     * 
     *
     * @var CommitParentsItem[]
     */
    protected $parents;
    /**
     * 
     *
     * @var CommitStats
     */
    protected $stats;
    /**
     * 
     *
     * @var CommitFilesItem[]
     */
    protected $files;
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSha() : ?string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string|null $sha
     *
     * @return self
     */
    public function setSha(?string $sha) : self
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
        $this->initialized['commentsUrl'] = true;
        $this->commentsUrl = $commentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return CommitCommit
     */
    public function getCommit() : CommitCommit
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param CommitCommit $commit
     *
     * @return self
     */
    public function setCommit(CommitCommit $commit) : self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return CommitAuthor|null
     */
    public function getAuthor() : ?CommitAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param CommitAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?CommitAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return CommitCommitter|null
     */
    public function getCommitter() : ?CommitCommitter
    {
        return $this->committer;
    }
    /**
     * 
     *
     * @param CommitCommitter|null $committer
     *
     * @return self
     */
    public function setCommitter(?CommitCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
        return $this;
    }
    /**
     * 
     *
     * @return CommitParentsItem[]
     */
    public function getParents() : array
    {
        return $this->parents;
    }
    /**
     * 
     *
     * @param CommitParentsItem[] $parents
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
     * @return CommitStats
     */
    public function getStats() : CommitStats
    {
        return $this->stats;
    }
    /**
     * 
     *
     * @param CommitStats $stats
     *
     * @return self
     */
    public function setStats(CommitStats $stats) : self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;
        return $this;
    }
    /**
     * 
     *
     * @return CommitFilesItem[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param CommitFilesItem[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
}