<?php

namespace Github\Model;

class ReposOwnerRepoGitRefsPostBody
{
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     *
     * @var string
     */
    protected $ref;
    /**
     * The SHA1 value for this reference.
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * The SHA1 value for this reference.
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * The SHA1 value for this reference.
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->sha = $sha;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
}