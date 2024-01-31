<?php

namespace Github\Model;

class FileCommit extends \ArrayObject
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
     * @var FileCommitContent|null
     */
    protected $content;
    /**
     * 
     *
     * @var FileCommitCommit
     */
    protected $commit;
    /**
     * 
     *
     * @return FileCommitContent|null
     */
    public function getContent() : ?FileCommitContent
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param FileCommitContent|null $content
     *
     * @return self
     */
    public function setContent(?FileCommitContent $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * 
     *
     * @return FileCommitCommit
     */
    public function getCommit() : FileCommitCommit
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param FileCommitCommit $commit
     *
     * @return self
     */
    public function setCommit(FileCommitCommit $commit) : self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;
        return $this;
    }
}