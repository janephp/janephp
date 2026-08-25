<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDropboxDataSourceDisplay implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $folder;
    /**
     * @return string
     */
    public function getFolder(): string
    {
        return $this->folder;
    }
    /**
     * @param string $folder
     *
     * @return self
     */
    public function setFolder(string $folder): self
    {
        $this->initialized['folder'] = true;
        $this->folder = $folder;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['folder' => ['folder', 'getFolder', 'setFolder']];
    }
}