<?php

namespace Github\Model;

class GistsPostBodyFilesItem extends \ArrayObject
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
     * Content of the file
     *
     * @var string
     */
    protected $content;
    /**
     * Content of the file
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * Content of the file
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}