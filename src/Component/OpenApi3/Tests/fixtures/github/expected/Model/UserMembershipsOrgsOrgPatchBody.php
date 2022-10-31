<?php

namespace Github\Model;

class UserMembershipsOrgsOrgPatchBody extends \ArrayObject
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
     * The state that the membership should be in. Only `"active"` will be accepted.
     *
     * @var string
     */
    protected $state;
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
}