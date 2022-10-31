<?php

namespace Github\Model;

class GistsPostBody extends \ArrayObject
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
     * Description of the gist
     *
     * @var string
     */
    protected $description;
    /**
     * Names and content for the files that make up the gist
     *
     * @var GistsPostBodyFilesItem[]
     */
    protected $files;
    /**
     * 
     *
     * @var mixed
     */
    protected $public;
    /**
     * Description of the gist
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the gist
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
    /**
     * Names and content for the files that make up the gist
     *
     * @return GistsPostBodyFilesItem[]
     */
    public function getFiles() : iterable
    {
        return $this->files;
    }
    /**
     * Names and content for the files that make up the gist
     *
     * @param GistsPostBodyFilesItem[] $files
     *
     * @return self
     */
    public function setFiles(iterable $files) : self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }
    /**
     * 
     *
     * @param mixed $public
     *
     * @return self
     */
    public function setPublic($public) : self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
        return $this;
    }
}