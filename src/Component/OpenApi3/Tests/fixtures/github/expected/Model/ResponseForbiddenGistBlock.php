<?php

namespace Github\Model;

class ResponseForbiddenGistBlock extends \ArrayObject
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
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHtmlUrl() : ?string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string|null $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(?string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
}