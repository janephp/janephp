<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAWSDataSource implements AdditionalPropertiesInterface
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
     * Spaces bucket name
     *
     * @var string
     */
    protected $bucketName;
    /**
     * @var string
     */
    protected $itemPath;
    /**
     * The AWS Key ID
     *
     * @var string
     */
    protected $keyId;
    /**
     * Region of bucket
     *
     * @var string
     */
    protected $region;
    /**
     * The AWS Secret Key
     *
     * @var string
     */
    protected $secretKey;
    /**
     * Spaces bucket name
     *
     * @return string
     */
    public function getBucketName(): string
    {
        return $this->bucketName;
    }
    /**
     * Spaces bucket name
     *
     * @param string $bucketName
     *
     * @return self
     */
    public function setBucketName(string $bucketName): self
    {
        $this->initialized['bucketName'] = true;
        $this->bucketName = $bucketName;
        return $this;
    }
    /**
     * @return string
     */
    public function getItemPath(): string
    {
        return $this->itemPath;
    }
    /**
     * @param string $itemPath
     *
     * @return self
     */
    public function setItemPath(string $itemPath): self
    {
        $this->initialized['itemPath'] = true;
        $this->itemPath = $itemPath;
        return $this;
    }
    /**
     * The AWS Key ID
     *
     * @return string
     */
    public function getKeyId(): string
    {
        return $this->keyId;
    }
    /**
     * The AWS Key ID
     *
     * @param string $keyId
     *
     * @return self
     */
    public function setKeyId(string $keyId): self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * Region of bucket
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region of bucket
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The AWS Secret Key
     *
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }
    /**
     * The AWS Secret Key
     *
     * @param string $secretKey
     *
     * @return self
     */
    public function setSecretKey(string $secretKey): self
    {
        $this->initialized['secretKey'] = true;
        $this->secretKey = $secretKey;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['bucketName' => ['bucket_name', 'getBucketName', 'setBucketName'], 'itemPath' => ['item_path', 'getItemPath', 'setItemPath'], 'keyId' => ['key_id', 'getKeyId', 'setKeyId'], 'region' => ['region', 'getRegion', 'setRegion'], 'secretKey' => ['secret_key', 'getSecretKey', 'setSecretKey']];
    }
}