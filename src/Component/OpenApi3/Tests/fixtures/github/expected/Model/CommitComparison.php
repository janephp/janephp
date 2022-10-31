<?php

namespace Github\Model;

class CommitComparison extends \ArrayObject
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
     * @var string
     */
    protected $permalinkUrl;
    /**
     * 
     *
     * @var string
     */
    protected $diffUrl;
    /**
     * 
     *
     * @var string
     */
    protected $patchUrl;
    /**
     * Commit
     *
     * @var Commit
     */
    protected $baseCommit;
    /**
     * Commit
     *
     * @var Commit
     */
    protected $mergeBaseCommit;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $aheadBy;
    /**
     * 
     *
     * @var int
     */
    protected $behindBy;
    /**
     * 
     *
     * @var int
     */
    protected $totalCommits;
    /**
     * 
     *
     * @var Commit[]
     */
    protected $commits;
    /**
     * 
     *
     * @var DiffEntry[]
     */
    protected $files;
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
     * @return string
     */
    public function getPermalinkUrl() : string
    {
        return $this->permalinkUrl;
    }
    /**
     * 
     *
     * @param string $permalinkUrl
     *
     * @return self
     */
    public function setPermalinkUrl(string $permalinkUrl) : self
    {
        $this->initialized['permalinkUrl'] = true;
        $this->permalinkUrl = $permalinkUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiffUrl() : string
    {
        return $this->diffUrl;
    }
    /**
     * 
     *
     * @param string $diffUrl
     *
     * @return self
     */
    public function setDiffUrl(string $diffUrl) : self
    {
        $this->initialized['diffUrl'] = true;
        $this->diffUrl = $diffUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPatchUrl() : string
    {
        return $this->patchUrl;
    }
    /**
     * 
     *
     * @param string $patchUrl
     *
     * @return self
     */
    public function setPatchUrl(string $patchUrl) : self
    {
        $this->initialized['patchUrl'] = true;
        $this->patchUrl = $patchUrl;
        return $this;
    }
    /**
     * Commit
     *
     * @return Commit
     */
    public function getBaseCommit() : Commit
    {
        return $this->baseCommit;
    }
    /**
     * Commit
     *
     * @param Commit $baseCommit
     *
     * @return self
     */
    public function setBaseCommit(Commit $baseCommit) : self
    {
        $this->initialized['baseCommit'] = true;
        $this->baseCommit = $baseCommit;
        return $this;
    }
    /**
     * Commit
     *
     * @return Commit
     */
    public function getMergeBaseCommit() : Commit
    {
        return $this->mergeBaseCommit;
    }
    /**
     * Commit
     *
     * @param Commit $mergeBaseCommit
     *
     * @return self
     */
    public function setMergeBaseCommit(Commit $mergeBaseCommit) : self
    {
        $this->initialized['mergeBaseCommit'] = true;
        $this->mergeBaseCommit = $mergeBaseCommit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAheadBy() : int
    {
        return $this->aheadBy;
    }
    /**
     * 
     *
     * @param int $aheadBy
     *
     * @return self
     */
    public function setAheadBy(int $aheadBy) : self
    {
        $this->initialized['aheadBy'] = true;
        $this->aheadBy = $aheadBy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBehindBy() : int
    {
        return $this->behindBy;
    }
    /**
     * 
     *
     * @param int $behindBy
     *
     * @return self
     */
    public function setBehindBy(int $behindBy) : self
    {
        $this->initialized['behindBy'] = true;
        $this->behindBy = $behindBy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalCommits() : int
    {
        return $this->totalCommits;
    }
    /**
     * 
     *
     * @param int $totalCommits
     *
     * @return self
     */
    public function setTotalCommits(int $totalCommits) : self
    {
        $this->initialized['totalCommits'] = true;
        $this->totalCommits = $totalCommits;
        return $this;
    }
    /**
     * 
     *
     * @return Commit[]
     */
    public function getCommits() : array
    {
        return $this->commits;
    }
    /**
     * 
     *
     * @param Commit[] $commits
     *
     * @return self
     */
    public function setCommits(array $commits) : self
    {
        $this->initialized['commits'] = true;
        $this->commits = $commits;
        return $this;
    }
    /**
     * 
     *
     * @return DiffEntry[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param DiffEntry[] $files
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