<?php

namespace Github\Model;

class GistsGistIdPatchBodyFilesItem extends \ArrayObject
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
     * The new content of the file
     *
     * @var string
     */
    protected $content;
    /**
     * The new filename for the file
     *
     * @var string|null
     */
    protected $filename;
    /**
     * The new content of the file
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The new content of the file
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
    /**
     * The new filename for the file
     *
     * @return string|null
     */
    public function getFilename() : ?string
    {
        return $this->filename;
    }
    /**
     * The new filename for the file
     *
     * @param string|null $filename
     *
     * @return self
     */
    public function setFilename(?string $filename) : self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
}