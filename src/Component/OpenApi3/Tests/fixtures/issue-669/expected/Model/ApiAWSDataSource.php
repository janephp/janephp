<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAWSDataSource implements AdditionalPropertiesInterface
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
     * The AWS Key ID
     *
     * @var string
     */
    public string $keyId;
    /**
     * Region of bucket
     *
     * @var string
     */
    public string $region;
    /**
     * The AWS Secret Key
     *
     * @var string
     */
    public string $secretKey;
    public function definedProperties(): array
    {
        return ['bucketName' => 'bucket_name', 'itemPath' => 'item_path', 'keyId' => 'key_id', 'region' => 'region', 'secretKey' => 'secret_key'];
    }
}