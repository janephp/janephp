<?php

namespace Github\Model;

class ProjectsProjectIdColumnsPostBody extends \ArrayObject
{
    /**
     * Name of the project column
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the project column
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the project column
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
}