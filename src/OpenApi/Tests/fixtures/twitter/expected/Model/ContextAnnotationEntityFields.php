<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class ContextAnnotationEntityFields
{
    /**
     * The unique id for a context annotation entity.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the context annotation entity.
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the context annotation entity.
     *
     * @var string
     */
    protected $description;
    /**
     * The unique id for a context annotation entity.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique id for a context annotation entity.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the context annotation entity.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the context annotation entity.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Description of the context annotation entity.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the context annotation entity.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
}