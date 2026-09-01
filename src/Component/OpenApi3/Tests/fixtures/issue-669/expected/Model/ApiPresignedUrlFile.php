<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiPresignedUrlFile implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Local filename
     *
     * @var string
     */
    public string $fileName;
    /**
     * The size of the file in bytes.
     *
     * @var string
     */
    public string $fileSize;
    public function definedProperties(): array
    {
        return ['fileName' => 'file_name', 'fileSize' => 'file_size'];
    }
}