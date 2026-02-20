<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Link
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
     * @var string|null
     */
    protected $operationRef;
    /**
     * @var string|null
     */
    protected $operationId;
    /**
     * @var array<string, string>|null
     */
    protected $parameters;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var Server|null
     */
    protected $body;

    public function getOperationRef(): ?string
    {
        return $this->operationRef;
    }

    public function setOperationRef(?string $operationRef): self
    {
        $this->initialized['operationRef'] = true;
        $this->operationRef = $operationRef;

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
     * @return array<string, string>|null
     */
    public function getParameters(): ?iterable
    {
        return $this->parameters;
    }

    /**
     * @param array<string, string>|null $parameters
     */
    public function setParameters(?iterable $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

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

    public function getBody(): ?Server
    {
        return $this->body;
    }

    public function setBody(?Server $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }
}
