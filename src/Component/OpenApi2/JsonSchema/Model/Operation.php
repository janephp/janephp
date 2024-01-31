<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class Operation extends \ArrayObject
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
     * @var string[]|null
     */
    protected $tags;
    /**
     * A brief summary of the operation.
     *
     * @var string|null
     */
    protected $summary;
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     *
     * @var string|null
     */
    protected $description;
    /**
     * information about external documentation
     *
     * @var ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * A unique identifier of the operation.
     *
     * @var string|null
     */
    protected $operationId;
    /**
     * A list of MIME types the API can produce.
     *
     * @var string[]|null
     */
    protected $produces;
    /**
     * A list of MIME types the API can consume.
     *
     * @var string[]|null
     */
    protected $consumes;
    /**
     * The parameters needed to send a valid API call.
     *
     * @var BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|JsonReference[]|null
     */
    protected $parameters;
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     *
     * @var Response|JsonReference[]|mixed[]|null
     */
    protected $responses;
    /**
     * The transfer protocol of the API.
     *
     * @var string[]|null
     */
    protected $schemes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deprecated = false;
    /**
     * 
     *
     * @var array<string, string[]>[]|null
     */
    protected $security;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param string[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * A brief summary of the operation.
     *
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * A brief summary of the operation.
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
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
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
     * information about external documentation
     *
     * @return ExternalDocs|null
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * information about external documentation
     *
     * @param ExternalDocs|null $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs) : self
    {
        $this->initialized['externalDocs'] = true;
        $this->externalDocs = $externalDocs;
        return $this;
    }
    /**
     * A unique identifier of the operation.
     *
     * @return string|null
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * A unique identifier of the operation.
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
     * A list of MIME types the API can produce.
     *
     * @return string[]|null
     */
    public function getProduces() : ?array
    {
        return $this->produces;
    }
    /**
     * A list of MIME types the API can produce.
     *
     * @param string[]|null $produces
     *
     * @return self
     */
    public function setProduces(?array $produces) : self
    {
        $this->initialized['produces'] = true;
        $this->produces = $produces;
        return $this;
    }
    /**
     * A list of MIME types the API can consume.
     *
     * @return string[]|null
     */
    public function getConsumes() : ?array
    {
        return $this->consumes;
    }
    /**
     * A list of MIME types the API can consume.
     *
     * @param string[]|null $consumes
     *
     * @return self
     */
    public function setConsumes(?array $consumes) : self
    {
        $this->initialized['consumes'] = true;
        $this->consumes = $consumes;
        return $this;
    }
    /**
     * The parameters needed to send a valid API call.
     *
     * @return BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|JsonReference[]|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * The parameters needed to send a valid API call.
     *
     * @param BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|JsonReference[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     *
     * @return Response|JsonReference[]|mixed[]
     */
    public function getResponses()
    {
        return $this->responses;
    }
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     *
     * @param Response|JsonReference[]|mixed[] $responses
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
     * The transfer protocol of the API.
     *
     * @return string[]|null
     */
    public function getSchemes() : ?array
    {
        return $this->schemes;
    }
    /**
     * The transfer protocol of the API.
     *
     * @param string[]|null $schemes
     *
     * @return self
     */
    public function setSchemes(?array $schemes) : self
    {
        $this->initialized['schemes'] = true;
        $this->schemes = $schemes;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * 
     *
     * @param bool|null $deprecated
     *
     * @return self
     */
    public function setDeprecated(?bool $deprecated) : self
    {
        $this->initialized['deprecated'] = true;
        $this->deprecated = $deprecated;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string[]>[]|null
     */
    public function getSecurity() : ?array
    {
        return $this->security;
    }
    /**
     * 
     *
     * @param array<string, string[]>[]|null $security
     *
     * @return self
     */
    public function setSecurity(?array $security) : self
    {
        $this->initialized['security'] = true;
        $this->security = $security;
        return $this;
    }
}