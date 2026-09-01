<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiFileUploadDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The original file name
     *
     * @var string
     */
    public string $originalFileName;
    /**
     * The size of the file in bytes
     *
     * @var string
     */
    public string $sizeInBytes;
    /**
     * The object key the file was stored as
     *
     * @var string
     */
    public string $storedObjectKey;
    public function definedProperties(): array
    {
        return ['originalFileName' => 'original_file_name', 'sizeInBytes' => 'size_in_bytes', 'storedObjectKey' => 'stored_object_key'];
    }
}