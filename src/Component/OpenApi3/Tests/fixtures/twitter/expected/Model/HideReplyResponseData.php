<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class HideReplyResponseData extends \ArrayObject
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
     * @var bool
     */
    protected $hidden;
    /**
     * 
     *
     * @return bool
     */
    public function getHidden() : bool
    {
        return $this->hidden;
    }
    /**
     * 
     *
     * @param bool $hidden
     *
     * @return self
     */
    public function setHidden(bool $hidden) : self
    {
        $this->initialized['hidden'] = true;
        $this->hidden = $hidden;
        return $this;
    }
}