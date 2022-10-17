<?php

namespace Github\Model;

class ResponseForbiddenGist extends \ArrayObject
{
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
        $this->documentationUrl = $documentationUrl;
        return $this;
    }
}