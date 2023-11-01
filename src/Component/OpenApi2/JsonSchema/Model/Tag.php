<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class Tag extends \ArrayObject
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
    protected $name;
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
}