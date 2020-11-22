<?php

namespace Github\Model;

class ReposOwnerRepoGitRefsRefPatchBody
{
    /**
     * The SHA1 value to set this reference to
     *
     * @var string
     */
    protected $sha;
    /**
     * Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     *
     * @var bool
     */
    protected $force = false;
    /**
     * The SHA1 value to set this reference to
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * The SHA1 value to set this reference to
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
     * Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     *
     * @return bool
     */
    public function getForce() : bool
    {
        return $this->force;
    }
    /**
     * Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     *
     * @param bool $force
     *
     * @return self
     */
    public function setForce(bool $force) : self
    {
        $this->force = $force;
        return $this;
    }
}