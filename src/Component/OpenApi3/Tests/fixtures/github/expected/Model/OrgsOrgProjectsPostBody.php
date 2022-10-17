<?php

namespace Github\Model;

class OrgsOrgProjectsPostBody extends \ArrayObject
{
    /**
     * The name of the project.
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the project.
     *
     * @var string
     */
    protected $body;
    /**
     * The name of the project.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the project.
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
     * The description of the project.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The description of the project.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
}