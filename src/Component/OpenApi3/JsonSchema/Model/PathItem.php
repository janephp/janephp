<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class PathItem extends \ArrayObject
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
     * @var string|null
     */
    protected $dollarRef;
    /**
     * 
     *
     * @var string|null
     */
    protected $summary;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $get;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $put;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $post;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $delete;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $options;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $head;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $patch;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $trace;
    /**
     * 
     *
     * @var Server[]|null
     */
    protected $servers;
    /**
     * 
     *
     * @var Parameter[]|Reference[]|null
     */
    protected $parameters;
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarRef() : ?string
    {
        return $this->dollarRef;
    }
    /**
     * 
     *
     * @param string|null $dollarRef
     *
     * @return self
     */
    public function setDollarRef(?string $dollarRef) : self
    {
        $this->initialized['dollarRef'] = true;
        $this->dollarRef = $dollarRef;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string|null $summary
     *
     * @return self
     */
    public function setSummary(?string $summary) : self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getGet() : ?Operation
    {
        return $this->get;
    }
    /**
     * 
     *
     * @param Operation|null $get
     *
     * @return self
     */
    public function setGet(?Operation $get) : self
    {
        $this->initialized['get'] = true;
        $this->get = $get;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getPut() : ?Operation
    {
        return $this->put;
    }
    /**
     * 
     *
     * @param Operation|null $put
     *
     * @return self
     */
    public function setPut(?Operation $put) : self
    {
        $this->initialized['put'] = true;
        $this->put = $put;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getPost() : ?Operation
    {
        return $this->post;
    }
    /**
     * 
     *
     * @param Operation|null $post
     *
     * @return self
     */
    public function setPost(?Operation $post) : self
    {
        $this->initialized['post'] = true;
        $this->post = $post;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getDelete() : ?Operation
    {
        return $this->delete;
    }
    /**
     * 
     *
     * @param Operation|null $delete
     *
     * @return self
     */
    public function setDelete(?Operation $delete) : self
    {
        $this->initialized['delete'] = true;
        $this->delete = $delete;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getOptions() : ?Operation
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param Operation|null $options
     *
     * @return self
     */
    public function setOptions(?Operation $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getHead() : ?Operation
    {
        return $this->head;
    }
    /**
     * 
     *
     * @param Operation|null $head
     *
     * @return self
     */
    public function setHead(?Operation $head) : self
    {
        $this->initialized['head'] = true;
        $this->head = $head;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getPatch() : ?Operation
    {
        return $this->patch;
    }
    /**
     * 
     *
     * @param Operation|null $patch
     *
     * @return self
     */
    public function setPatch(?Operation $patch) : self
    {
        $this->initialized['patch'] = true;
        $this->patch = $patch;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getTrace() : ?Operation
    {
        return $this->trace;
    }
    /**
     * 
     *
     * @param Operation|null $trace
     *
     * @return self
     */
    public function setTrace(?Operation $trace) : self
    {
        $this->initialized['trace'] = true;
        $this->trace = $trace;
        return $this;
    }
    /**
     * 
     *
     * @return Server[]|null
     */
    public function getServers() : ?array
    {
        return $this->servers;
    }
    /**
     * 
     *
     * @param Server[]|null $servers
     *
     * @return self
     */
    public function setServers(?array $servers) : self
    {
        $this->initialized['servers'] = true;
        $this->servers = $servers;
        return $this;
    }
    /**
     * 
     *
     * @return Parameter[]|Reference[]|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param Parameter[]|Reference[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}