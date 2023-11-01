<?php

namespace Github\Model;

class GitTag extends \ArrayObject
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
    protected $nodeId;
    /**
     * Name of the tag
     *
     * @var string
     */
    protected $tag;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * URL for the tag
     *
     * @var string
     */
    protected $url;
    /**
     * Message describing the purpose of the tag
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var GitTagTagger
     */
    protected $tagger;
    /**
     * 
     *
     * @var GitTagObject
     */
    protected $object;
    /**
     * 
     *
     * @var Verification
     */
    protected $verification;
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * Name of the tag
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * Name of the tag
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
        return $this;
    }
    /**
     * URL for the tag
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the tag
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Message describing the purpose of the tag
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Message describing the purpose of the tag
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
     * @return GitTagTagger
     */
    public function getTagger() : GitTagTagger
    {
        return $this->tagger;
    }
    /**
     * 
     *
     * @param GitTagTagger $tagger
     *
     * @return self
     */
    public function setTagger(GitTagTagger $tagger) : self
    {
        $this->initialized['tagger'] = true;
        $this->tagger = $tagger;
        return $this;
    }
    /**
     * 
     *
     * @return GitTagObject
     */
    public function getObject() : GitTagObject
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param GitTagObject $object
     *
     * @return self
     */
    public function setObject(GitTagObject $object) : self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * 
     *
     * @return Verification
     */
    public function getVerification() : Verification
    {
        return $this->verification;
    }
    /**
     * 
     *
     * @param Verification $verification
     *
     * @return self
     */
    public function setVerification(Verification $verification) : self
    {
        $this->initialized['verification'] = true;
        $this->verification = $verification;
        return $this;
    }
}