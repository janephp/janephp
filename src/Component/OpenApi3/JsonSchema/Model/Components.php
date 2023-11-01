<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Components extends \ArrayObject
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
     * @var Schema|Reference[]|null
     */
    protected $schemas;
    /**
     * 
     *
     * @var Reference|Response[]|null
     */
    protected $responses;
    /**
     * 
     *
     * @var Reference|Parameter[]|null
     */
    protected $parameters;
    /**
     * 
     *
     * @var Reference|Example[]|null
     */
    protected $examples;
    /**
     * 
     *
     * @var Reference|RequestBody[]|null
     */
    protected $requestBodies;
    /**
     * 
     *
     * @var Reference|Header[]|null
     */
    protected $headers;
    /**
     * 
     *
     * @var Reference|APIKeySecurityScheme|HTTPSecurityScheme|OAuth2SecurityScheme|OpenIdConnectSecurityScheme[]|null
     */
    protected $securitySchemes;
    /**
     * 
     *
     * @var Reference|Link[]|null
     */
    protected $links;
    /**
     * 
     *
     * @var Reference|mixed[][]|null
     */
    protected $callbacks;
    /**
     * 
     *
     * @return Schema|Reference[]
     */
    public function getSchemas()
    {
        return $this->schemas;
    }
    /**
     * 
     *
     * @param Schema|Reference[] $schemas
     *
     * @return self
     */
    public function setSchemas($schemas) : self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|Response[]
     */
    public function getResponses()
    {
        return $this->responses;
    }
    /**
     * 
     *
     * @param Reference|Response[] $responses
     *
     * @return self
     */
    public function setResponses($responses) : self
    {
        $this->initialized['responses'] = true;
        $this->responses = $responses;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|Parameter[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param Reference|Parameter[] $parameters
     *
     * @return self
     */
    public function setParameters($parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|Example[]
     */
    public function getExamples()
    {
        return $this->examples;
    }
    /**
     * 
     *
     * @param Reference|Example[] $examples
     *
     * @return self
     */
    public function setExamples($examples) : self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|RequestBody[]
     */
    public function getRequestBodies()
    {
        return $this->requestBodies;
    }
    /**
     * 
     *
     * @param Reference|RequestBody[] $requestBodies
     *
     * @return self
     */
    public function setRequestBodies($requestBodies) : self
    {
        $this->initialized['requestBodies'] = true;
        $this->requestBodies = $requestBodies;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|Header[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }
    /**
     * 
     *
     * @param Reference|Header[] $headers
     *
     * @return self
     */
    public function setHeaders($headers) : self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|APIKeySecurityScheme|HTTPSecurityScheme|OAuth2SecurityScheme|OpenIdConnectSecurityScheme[]
     */
    public function getSecuritySchemes()
    {
        return $this->securitySchemes;
    }
    /**
     * 
     *
     * @param Reference|APIKeySecurityScheme|HTTPSecurityScheme|OAuth2SecurityScheme|OpenIdConnectSecurityScheme[] $securitySchemes
     *
     * @return self
     */
    public function setSecuritySchemes($securitySchemes) : self
    {
        $this->initialized['securitySchemes'] = true;
        $this->securitySchemes = $securitySchemes;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param Reference|Link[] $links
     *
     * @return self
     */
    public function setLinks($links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return Reference|mixed[][]
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
    /**
     * 
     *
     * @param Reference|mixed[][] $callbacks
     *
     * @return self
     */
    public function setCallbacks($callbacks) : self
    {
        $this->initialized['callbacks'] = true;
        $this->callbacks = $callbacks;
        return $this;
    }
}