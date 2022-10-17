<?php

namespace Github\Model;

class OrgHookConfig extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $insecureSsl;
    /**
     * 
     *
     * @var string
     */
    protected $contentType;
    /**
     * 
     *
     * @var string
     */
    protected $secret;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInsecureSsl() : string
    {
        return $this->insecureSsl;
    }
    /**
     * 
     *
     * @param string $insecureSsl
     *
     * @return self
     */
    public function setInsecureSsl(string $insecureSsl) : self
    {
        $this->insecureSsl = $insecureSsl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * 
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret) : self
    {
        $this->secret = $secret;
        return $this;
    }
}