<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionRequiredStatusChecksPatchBody
{
    /**
     * Require branches to be up to date before merging.
     *
     * @var bool
     */
    protected $strict;
    /**
     * The list of status checks to require in order to merge into this branch
     *
     * @var string[]
     */
    protected $contexts;
    /**
     * Require branches to be up to date before merging.
     *
     * @return bool
     */
    public function getStrict() : bool
    {
        return $this->strict;
    }
    /**
     * Require branches to be up to date before merging.
     *
     * @param bool $strict
     *
     * @return self
     */
    public function setStrict(bool $strict) : self
    {
        $this->strict = $strict;
        return $this;
    }
    /**
     * The list of status checks to require in order to merge into this branch
     *
     * @return string[]
     */
    public function getContexts() : array
    {
        return $this->contexts;
    }
    /**
     * The list of status checks to require in order to merge into this branch
     *
     * @param string[] $contexts
     *
     * @return self
     */
    public function setContexts(array $contexts) : self
    {
        $this->contexts = $contexts;
        return $this;
    }
}