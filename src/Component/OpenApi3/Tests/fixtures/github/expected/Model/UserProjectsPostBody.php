<?php

namespace Github\Model;

class UserProjectsPostBody extends \ArrayObject
{
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
        $this->body = $body;
        return $this;
    }
}