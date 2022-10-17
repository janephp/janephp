<?php

namespace Github\Model;

class BranchProtectionRequiredLinearHistory extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
}