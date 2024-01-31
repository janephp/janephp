<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class BodyParameter extends \ArrayObject
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
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The name of the parameter.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Determines the location of the parameter.
     *
     * @var string|null
     */
    protected $in;
    /**
     * Determines whether or not this parameter is required or optional.
     *
     * @var bool|null
     */
    protected $required = false;
    /**
     * 
     *
     * @var Schema|JsonReference|null
     */
    protected $schema;
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
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
     * The name of the parameter.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the parameter.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Determines the location of the parameter.
     *
     * @return string|null
     */
    public function getIn() : ?string
    {
        return $this->in;
    }
    /**
     * Determines the location of the parameter.
     *
     * @param string|null $in
     *
     * @return self
     */
    public function setIn(?string $in) : self
    {
        $this->initialized['in'] = true;
        $this->in = $in;
        return $this;
    }
    /**
     * Determines whether or not this parameter is required or optional.
     *
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * Determines whether or not this parameter is required or optional.
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
     * @return Schema|JsonReference|null
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * 
     *
     * @param Schema|JsonReference|null $schema
     *
     * @return self
     */
    public function setSchema($schema) : self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
}