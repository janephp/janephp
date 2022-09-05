<?php

namespace PicturePark\API\Model;

class SharePageViewEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var string|null
     */
    protected $shareToken;
    /**
     * 
     *
     * @return string|null
     */
    public function getShareToken() : ?string
    {
        return $this->shareToken;
    }
    /**
     * 
     *
     * @param string|null $shareToken
     *
     * @return self
     */
    public function setShareToken(?string $shareToken) : self
    {
        $this->shareToken = $shareToken;
        return $this;
    }
}