<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiSpacesDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Spaces bucket name
     *
     * @var string
     */
    public string $bucketName;
    /**
     * @var string
     */
    public string $itemPath;
    /**
     * Region of bucket
     *
     * @var string
     */
    public string $region;
    public function definedProperties(): array
    {
        return ['bucketName' => 'bucket_name', 'itemPath' => 'item_path', 'region' => 'region'];
    }
}