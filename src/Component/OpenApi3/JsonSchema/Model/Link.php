<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Link extends \ArrayObject
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
    protected $operationId;
    /**
     * 
     *
     * @var string|null
     */
    protected $operationRef;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $parameters;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $requestBody;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var Server|null
     */
    protected $server;
    /**
     * 
     *
     * @return string|null
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * 
     *
     * @param string|null $operationId
     *
     * @return self
     */
    public function setOperationId(?string $operationId) : self
    {
        $this->initialized['operationId'] = true;
        $this->operationId = $operationId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperationRef() : ?string
    {
        return $this->operationRef;
    }
    /**
     * 
     *
     * @param string|null $operationRef
     *
     * @return self
     */
    public function setOperationRef(?string $operationRef) : self
    {
        $this->initialized['operationRef'] = true;
        $this->operationRef = $operationRef;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getParameters() : ?iterable
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $parameters
     *
     * @return self
     */
    public function setParameters(?iterable $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }
    /**
     * 
     *
     * @param mixed $requestBody
     *
     * @return self
     */
    public function setRequestBody($requestBody) : self
    {
        $this->initialized['requestBody'] = true;
        $this->requestBody = $requestBody;
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
     * @return Server|null
     */
    public function getServer() : ?Server
    {
        return $this->server;
    }
    /**
     * 
     *
     * @param Server|null $server
     *
     * @return self
     */
    public function setServer(?Server $server) : self
    {
        $this->initialized['server'] = true;
        $this->server = $server;
        return $this;
    }
}