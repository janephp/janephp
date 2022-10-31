<?php

namespace Github\Model;

class UserProjectsPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name of the project
     *
     * @var string
     */
    protected $name;
    /**
     * Body of the project
     *
     * @var string|null
     */
    protected $body;
    /**
     * Name of the project
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the project
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
     * Body of the project
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * Body of the project
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
}