<?php

namespace PicturePark\API\Model;

class SharePageViewEvent extends ApplicationEvent
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
        $this->initialized['shareToken'] = true;
        $this->shareToken = $shareToken;
        return $this;
    }
}