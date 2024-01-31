<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class MediaType extends \ArrayObject
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
     * @var Schema|Reference|null
     */
    protected $schema;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $example;
    /**
     * 
     *
     * @var array<string, Example|Reference>|null
     */
    protected $examples;
    /**
     * 
     *
     * @var array<string, Encoding>|null
     */
    protected $encoding;
    /**
     * 
     *
     * @return Schema|Reference|null
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * 
     *
     * @param Schema|Reference|null $schema
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
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }
    /**
     * 
     *
     * @param mixed $example
     *
     * @return self
     */
    public function setExample($example) : self
    {
        $this->initialized['example'] = true;
        $this->example = $example;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Example|Reference>|null
     */
    public function getExamples() : ?iterable
    {
        return $this->examples;
    }
    /**
     * 
     *
     * @param array<string, Example|Reference>|null $examples
     *
     * @return self
     */
    public function setExamples(?iterable $examples) : self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Encoding>|null
     */
    public function getEncoding() : ?iterable
    {
        return $this->encoding;
    }
    /**
     * 
     *
     * @param array<string, Encoding>|null $encoding
     *
     * @return self
     */
    public function setEncoding(?iterable $encoding) : self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;
        return $this;
    }
}