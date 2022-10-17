<?php

namespace Github\Model;

class GistsGistIdPatchBody extends \ArrayObject
{
    /**
     * Description of the gist
     *
     * @var string
     */
    protected $description;
    /**
     * Names of files to be updated
     *
     * @var GistsGistIdPatchBodyFilesItem[]
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
        $this->description = $description;
        return $this;
    }
    /**
     * Names of files to be updated
     *
     * @return GistsGistIdPatchBodyFilesItem[]
     */
    public function getFiles() : iterable
    {
        return $this->files;
    }
    /**
     * Names of files to be updated
     *
     * @param GistsGistIdPatchBodyFilesItem[] $files
     *
     * @return self
     */
    public function setFiles(iterable $files) : self
    {
        $this->files = $files;
        return $this;
    }
}