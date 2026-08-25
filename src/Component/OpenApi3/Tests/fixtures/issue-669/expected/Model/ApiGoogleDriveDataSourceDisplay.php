<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGoogleDriveDataSourceDisplay implements AdditionalPropertiesInterface
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
    protected $folderId;
    /**
     * Name of the selected folder if available
     *
     * @var string
     */
    protected $folderName;
    /**
     * @return string
     */
    public function getFolderId(): string
    {
        return $this->folderId;
    }
    /**
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId(string $folderId): self
    {
        $this->initialized['folderId'] = true;
        $this->folderId = $folderId;
        return $this;
    }
    /**
     * Name of the selected folder if available
     *
     * @return string
     */
    public function getFolderName(): string
    {
        return $this->folderName;
    }
    /**
     * Name of the selected folder if available
     *
     * @param string $folderName
     *
     * @return self
     */
    public function setFolderName(string $folderName): self
    {
        $this->initialized['folderName'] = true;
        $this->folderName = $folderName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['folderId' => ['folder_id', 'getFolderId', 'setFolderId'], 'folderName' => ['folder_name', 'getFolderName', 'setFolderName']];
    }
}