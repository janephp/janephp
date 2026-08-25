<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class GistsPostBodyFilesItem implements AdditionalPropertiesInterface
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
    public function getContent(): string
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
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['content' => ['content', 'getContent', 'setContent']];
    }
}