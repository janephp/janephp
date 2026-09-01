<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGoogleDriveDataSourceDisplay implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $folderId;
    /**
     * Name of the selected folder if available
     *
     * @var string
     */
    public string $folderName;
    public function definedProperties(): array
    {
        return ['folderId' => 'folder_id', 'folderName' => 'folder_name'];
    }
}