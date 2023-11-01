<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks extends \ArrayObject
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
        $this->initialized['strict'] = true;
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
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
}