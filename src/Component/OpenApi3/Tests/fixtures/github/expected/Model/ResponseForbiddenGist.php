<?php

namespace Github\Model;

class ResponseForbiddenGist extends \ArrayObject
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
     * @var ResponseForbiddenGistBlock
     */
    protected $block;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $documentationUrl;
    /**
     * 
     *
     * @return ResponseForbiddenGistBlock
     */
    public function getBlock() : ResponseForbiddenGistBlock
    {
        return $this->block;
    }
    /**
     * 
     *
     * @param ResponseForbiddenGistBlock $block
     *
     * @return self
     */
    public function setBlock(ResponseForbiddenGistBlock $block) : self
    {
        $this->initialized['block'] = true;
        $this->block = $block;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDocumentationUrl() : string
    {
        return $this->documentationUrl;
    }
    /**
     * 
     *
     * @param string $documentationUrl
     *
     * @return self
     */
    public function setDocumentationUrl(string $documentationUrl) : self
    {
        $this->initialized['documentationUrl'] = true;
        $this->documentationUrl = $documentationUrl;
        return $this;
    }
}