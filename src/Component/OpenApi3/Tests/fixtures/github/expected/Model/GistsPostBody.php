<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class GistsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * @var array<string, GistsPostBodyFilesItem>
     */
    protected $files;
    /**
     * @var mixed
     */
    protected $public;
    /**
     * Description of the gist
     *
     * @return string
     */
    public function getDescription(): string
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
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Names and content for the files that make up the gist
     *
     * @return array<string, GistsPostBodyFilesItem>
     */
    public function getFiles(): iterable
    {
        return $this->files;
    }
    /**
     * Names and content for the files that make up the gist
     *
     * @param array<string, GistsPostBodyFilesItem> $files
     *
     * @return self
     */
    public function setFiles(iterable $files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }
    /**
     * @param mixed $public
     *
     * @return self
     */
    public function setPublic($public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'files' => ['files', 'getFiles', 'setFiles'], 'public' => ['public', 'getPublic', 'setPublic']];
    }
}