<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Header extends \ArrayObject
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
     * @var bool|null
     */
    protected $required = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deprecated = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowEmptyValue = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $style = 'simple';
    /**
     * 
     *
     * @var bool|null
     */
    protected $explode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowReserved = false;
    /**
     * 
     *
     * @var Schema|Reference|null
     */
    protected $schema;
    /**
     * 
     *
     * @var array<string, MediaType>|null
     */
    protected $content;
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
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required) : self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
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
     * @return bool|null
     */
    public function getAllowEmptyValue() : ?bool
    {
        return $this->allowEmptyValue;
    }
    /**
     * 
     *
     * @param bool|null $allowEmptyValue
     *
     * @return self
     */
    public function setAllowEmptyValue(?bool $allowEmptyValue) : self
    {
        $this->initialized['allowEmptyValue'] = true;
        $this->allowEmptyValue = $allowEmptyValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * 
     *
     * @param string|null $style
     *
     * @return self
     */
    public function setStyle(?string $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    /**
     * 
     *
     * @param bool|null $explode
     *
     * @return self
     */
    public function setExplode(?bool $explode) : self
    {
        $this->initialized['explode'] = true;
        $this->explode = $explode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
    /**
     * 
     *
     * @param bool|null $allowReserved
     *
     * @return self
     */
    public function setAllowReserved(?bool $allowReserved) : self
    {
        $this->initialized['allowReserved'] = true;
        $this->allowReserved = $allowReserved;
        return $this;
    }
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
     * @return array<string, MediaType>|null
     */
    public function getContent() : ?iterable
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param array<string, MediaType>|null $content
     *
     * @return self
     */
    public function setContent(?iterable $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
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
}