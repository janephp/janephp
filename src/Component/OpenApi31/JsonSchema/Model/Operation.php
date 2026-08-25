<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Operation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<string>|null
     */
    protected $tags;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var ExternalDocumentation|null
     */
    protected $externalDocs;
    /**
     * @var string|null
     */
    protected $operationId;
    /**
     * @var list<mixed>|null
     */
    protected $parameters;
    /**
     * @var mixed|null
     */
    protected $requestBody;
    /**
     * @var Responses|null
     */
    protected $responses;
    /**
     * @var array<string, mixed>|null
     */
    protected $callbacks;
    /**
     * @var bool|null
     */
    protected $deprecated = false;
    /**
     * @var list<array<string, list<string>>>|null
     */
    protected $security;
    /**
     * @var list<Server>|null
     */
    protected $servers;

    /**
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param list<string>|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getExternalDocs(): ?ExternalDocumentation
    {
        return $this->externalDocs;
    }

    public function setExternalDocs(?ExternalDocumentation $externalDocs): self
    {
        $this->initialized['externalDocs'] = true;
        $this->externalDocs = $externalDocs;

        return $this;
    }

    public function getOperationId(): ?string
    {
        return $this->operationId;
    }

    public function setOperationId(?string $operationId): self
    {
        $this->initialized['operationId'] = true;
        $this->operationId = $operationId;

        return $this;
    }

    /**
     * @return list<mixed>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param list<mixed>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    public function getRequestBody()
    {
        return $this->requestBody;
    }

    public function setRequestBody($requestBody): self
    {
        $this->initialized['requestBody'] = true;
        $this->requestBody = $requestBody;

        return $this;
    }

    public function getResponses(): ?Responses
    {
        return $this->responses;
    }

    public function setResponses(?Responses $responses): self
    {
        $this->initialized['responses'] = true;
        $this->responses = $responses;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getCallbacks(): ?iterable
    {
        return $this->callbacks;
    }

    /**
     * @param array<string, mixed>|null $callbacks
     */
    public function setCallbacks(?iterable $callbacks): self
    {
        $this->initialized['callbacks'] = true;
        $this->callbacks = $callbacks;

        return $this;
    }

    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    public function setDeprecated(?bool $deprecated): self
    {
        $this->initialized['deprecated'] = true;
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * @return list<array<string, list<string>>>|null
     */
    public function getSecurity(): ?array
    {
        return $this->security;
    }

    /**
     * @param list<array<string, list<string>>>|null $security
     */
    public function setSecurity(?array $security): self
    {
        $this->initialized['security'] = true;
        $this->security = $security;

        return $this;
    }

    /**
     * @return list<Server>|null
     */
    public function getServers(): ?array
    {
        return $this->servers;
    }

    /**
     * @param list<Server>|null $servers
     */
    public function setServers(?array $servers): self
    {
        $this->initialized['servers'] = true;
        $this->servers = $servers;

        return $this;
    }
}
