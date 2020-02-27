<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class HideReplyRequest
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