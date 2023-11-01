<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class Response extends \ArrayObject
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
    protected $description;
    /**
     * 
     *
     * @var Schema|FileSchema|null
     */
    protected $schema;
    /**
     * 
     *
     * @var array<string, Header>|null
     */
    protected $headers;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $examples;
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
     * @return Schema|FileSchema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * 
     *
     * @param Schema|FileSchema|null $schema
     *
     * @return self
     */
    public function setSchema($schema) : self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Header>|null
     */
    public function getHeaders() : ?iterable
    {
        return $this->headers;
    }
    /**
     * 
     *
     * @param array<string, Header>|null $headers
     *
     * @return self
     */
    public function setHeaders(?iterable $headers) : self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getExamples() : ?iterable
    {
        return $this->examples;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $examples
     *
     * @return self
     */
    public function setExamples(?iterable $examples) : self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;
        return $this;
    }
}