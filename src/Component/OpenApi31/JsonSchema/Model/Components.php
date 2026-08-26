<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

use Jane\Component\OpenApi31\JsonSchema\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\JsonSchema\Runtime\AdditionalPropertiesInterface;
class Components implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var array<string, mixed>|null
     */
    protected $schemas;
    /**
     * @var array<string, mixed>|null
     */
    protected $responses;
    /**
     * @var array<string, mixed>|null
     */
    protected $parameters;
    /**
     * @var array<string, mixed>|null
     */
    protected $examples;
    /**
     * @var array<string, mixed>|null
     */
    protected $requestBodies;
    /**
     * @var array<string, mixed>|null
     */
    protected $headers;
    /**
     * @var array<string, mixed>|null
     */
    protected $securitySchemes;
    /**
     * @var array<string, mixed>|null
     */
    protected $links;
    /**
     * @var array<string, mixed>|null
     */
    protected $callbacks;
    /**
     * @var array<string, mixed>|null
     */
    protected $pathItems;

    /**
     * @return array<string, mixed>|null
     */
    public function getSchemas(): ?iterable
    {
        return $this->schemas;
    }

    /**
     * @param array<string, mixed>|null $schemas
     */
    public function setSchemas(?iterable $schemas): self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getResponses(): ?iterable
    {
        return $this->responses;
    }

    /**
     * @param array<string, mixed>|null $responses
     */
    public function setResponses(?iterable $responses): self
    {
        $this->initialized['responses'] = true;
        $this->responses = $responses;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getParameters(): ?iterable
    {
        return $this->parameters;
    }

    /**
     * @param array<string, mixed>|null $parameters
     */
    public function setParameters(?iterable $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getExamples(): ?iterable
    {
        return $this->examples;
    }

    /**
     * @param array<string, mixed>|null $examples
     */
    public function setExamples(?iterable $examples): self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getRequestBodies(): ?iterable
    {
        return $this->requestBodies;
    }

    /**
     * @param array<string, mixed>|null $requestBodies
     */
    public function setRequestBodies(?iterable $requestBodies): self
    {
        $this->initialized['requestBodies'] = true;
        $this->requestBodies = $requestBodies;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getHeaders(): ?iterable
    {
        return $this->headers;
    }

    /**
     * @param array<string, mixed>|null $headers
     */
    public function setHeaders(?iterable $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getSecuritySchemes(): ?iterable
    {
        return $this->securitySchemes;
    }

    /**
     * @param array<string, mixed>|null $securitySchemes
     */
    public function setSecuritySchemes(?iterable $securitySchemes): self
    {
        $this->initialized['securitySchemes'] = true;
        $this->securitySchemes = $securitySchemes;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getLinks(): ?iterable
    {
        return $this->links;
    }

    /**
     * @param array<string, mixed>|null $links
     */
    public function setLinks(?iterable $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

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

    /**
     * @return array<string, mixed>|null
     */
    public function getPathItems(): ?iterable
    {
        return $this->pathItems;
    }

    /**
     * @param array<string, mixed>|null $pathItems
     */
    public function setPathItems(?iterable $pathItems): self
    {
        $this->initialized['pathItems'] = true;
        $this->pathItems = $pathItems;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['schemas' => ['schemas', 'getSchemas', 'setSchemas'], 'responses' => ['responses', 'getResponses', 'setResponses'], 'parameters' => ['parameters', 'getParameters', 'setParameters'], 'examples' => ['examples', 'getExamples', 'setExamples'], 'requestBodies' => ['requestBodies', 'getRequestBodies', 'setRequestBodies'], 'headers' => ['headers', 'getHeaders', 'setHeaders'], 'securitySchemes' => ['securitySchemes', 'getSecuritySchemes', 'setSecuritySchemes'], 'links' => ['links', 'getLinks', 'setLinks'], 'callbacks' => ['callbacks', 'getCallbacks', 'setCallbacks'], 'pathItems' => ['pathItems', 'getPathItems', 'setPathItems']];
    }
}
