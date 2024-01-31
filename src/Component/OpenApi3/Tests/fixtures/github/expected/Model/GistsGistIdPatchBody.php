<?php

namespace Github\Model;

class GistsGistIdPatchBody extends \ArrayObject
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
     * Description of the gist
     *
     * @var string
     */
    protected $description;
    /**
     * Names of files to be updated
     *
     * @var array<string, GistsGistIdPatchBodyFilesItem>
     */
    protected $files;
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
     * Names of files to be updated
     *
     * @return array<string, GistsGistIdPatchBodyFilesItem>
     */
    public function getFiles() : iterable
    {
        return $this->files;
    }
    /**
     * Names of files to be updated
     *
     * @param array<string, GistsGistIdPatchBodyFilesItem> $files
     *
     * @return self
     */
    public function setFiles(iterable $files) : self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
}