<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ContextAnnotationDomainFields extends \ArrayObject
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
     * The unique id for a context annotation domain.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the context annotation domain.
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the context annotation domain.
     *
     * @var string
     */
    protected $description;
    /**
     * The unique id for a context annotation domain.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique id for a context annotation domain.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the context annotation domain.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the context annotation domain.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Description of the context annotation domain.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the context annotation domain.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}