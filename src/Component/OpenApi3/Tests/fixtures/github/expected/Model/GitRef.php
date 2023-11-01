<?php

namespace Github\Model;

class GitRef extends \ArrayObject
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
    protected $ref;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var GitRefObject
     */
    protected $object;
    /**
     * 
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->initialized['ref'] = true;
        $this->ref = $ref;
        return $this;
    }
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
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return GitRefObject
     */
    public function getObject() : GitRefObject
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param GitRefObject $object
     *
     * @return self
     */
    public function setObject(GitRefObject $object) : self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
}