<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class HTTPSecurityScheme extends \ArrayObject
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
    protected $scheme;
    /**
     * 
     *
     * @var string|null
     */
    protected $bearerFormat;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return string|null
     */
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    /**
     * 
     *
     * @param string|null $scheme
     *
     * @return self
     */
    public function setScheme(?string $scheme) : self
    {
        $this->initialized['scheme'] = true;
        $this->scheme = $scheme;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBearerFormat() : ?string
    {
        return $this->bearerFormat;
    }
    /**
     * 
     *
     * @param string|null $bearerFormat
     *
     * @return self
     */
    public function setBearerFormat(?string $bearerFormat) : self
    {
        $this->initialized['bearerFormat'] = true;
        $this->bearerFormat = $bearerFormat;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}