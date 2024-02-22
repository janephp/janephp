<?php

namespace Github\Model;

class CommitSearchResultItem extends \ArrayObject
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
     * @var string
     */
    protected $sha;
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
     * @var CommitSearchResultItemCommit
     */
    protected $commit;
    /**
     * 
     *
     * @var CommitSearchResultItemAuthor|null
     */
    protected $author;
    /**
     * 
     *
     * @var CommitSearchResultItemCommitter|null
     */
    protected $committer;
    /**
     * 
     *
     * @var list<CommitSearchResultItemParentsItem>
     */
    protected $parents;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var list<SearchResultTextMatchesItem>
     */
    protected $textMatches;
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
     * @return CommitSearchResultItemCommit
     */
    public function getCommit() : CommitSearchResultItemCommit
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param CommitSearchResultItemCommit $commit
     *
     * @return self
     */
    public function setCommit(CommitSearchResultItemCommit $commit) : self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return CommitSearchResultItemAuthor|null
     */
    public function getAuthor() : ?CommitSearchResultItemAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param CommitSearchResultItemAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?CommitSearchResultItemAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return CommitSearchResultItemCommitter|null
     */
    public function getCommitter() : ?CommitSearchResultItemCommitter
    {
        return $this->committer;
    }
    /**
     * 
     *
     * @param CommitSearchResultItemCommitter|null $committer
     *
     * @return self
     */
    public function setCommitter(?CommitSearchResultItemCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
        return $this;
    }
    /**
     * 
     *
     * @return list<CommitSearchResultItemParentsItem>
     */
    public function getParents() : array
    {
        return $this->parents;
    }
    /**
     * 
     *
     * @param list<CommitSearchResultItemParentsItem> $parents
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
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getRepository() : MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $repository
     *
     * @return self
     */
    public function setRepository(MinimalRepository $repository) : self
    {
        $this->initialized['repository'] = true;
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
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
     * @return list<SearchResultTextMatchesItem>
     */
    public function getTextMatches() : array
    {
        return $this->textMatches;
    }
    /**
     * 
     *
     * @param list<SearchResultTextMatchesItem> $textMatches
     *
     * @return self
     */
    public function setTextMatches(array $textMatches) : self
    {
        $this->initialized['textMatches'] = true;
        $this->textMatches = $textMatches;
        return $this;
    }
}