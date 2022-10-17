<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class HideReplyResponseData extends \ArrayObject
{
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
        $this->hidden = $hidden;
        return $this;
    }
}