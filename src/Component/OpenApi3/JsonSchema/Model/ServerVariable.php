<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class ServerVariable extends \ArrayObject
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
    protected $enum;
    /**
     * 
     *
     * @var string|null
     */
    protected $default;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    /**
     * 
     *
     * @param string[]|null $enum
     *
     * @return self
     */
    public function setEnum(?array $enum) : self
    {
        $this->initialized['enum'] = true;
        $this->enum = $enum;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefault() : ?string
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param string|null $default
     *
     * @return self
     */
    public function setDefault(?string $default) : self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
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
}