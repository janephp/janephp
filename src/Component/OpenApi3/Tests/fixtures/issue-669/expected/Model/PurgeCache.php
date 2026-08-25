<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PurgeCache implements AdditionalPropertiesInterface
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
     * An array of strings containing the path to the content to be purged from the CDN cache.
     *
     * @var list<string>
     */
    protected $files;
    /**
     * An array of strings containing the path to the content to be purged from the CDN cache.
     *
     * @return list<string>
     */
    public function getFiles(): array
    {
        return $this->files;
    }
    /**
     * An array of strings containing the path to the content to be purged from the CDN cache.
     *
     * @param list<string> $files
     *
     * @return self
     */
    public function setFiles(array $files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['files' => ['files', 'getFiles', 'setFiles']];
    }
}