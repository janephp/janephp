<?php

namespace Github\Model;

class GistsPostBodyFilesItem
{
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
        $this->content = $content;
        return $this;
    }
}