<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiSpacesDataSource extends \ArrayObject
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
     * Region of bucket
     *
     * @var string
     */
    protected $region;
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
}