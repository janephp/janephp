<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDropboxDataSourceDisplay extends \ArrayObject
{
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
}