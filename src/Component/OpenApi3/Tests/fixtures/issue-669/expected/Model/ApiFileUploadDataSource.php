<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiFileUploadDataSource implements AdditionalPropertiesInterface
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
     * The original file name
     *
     * @var string
     */
    protected $originalFileName;
    /**
     * The size of the file in bytes
     *
     * @var string
     */
    protected $sizeInBytes;
    /**
     * The object key the file was stored as
     *
     * @var string
     */
    protected $storedObjectKey;
    /**
     * The original file name
     *
     * @return string
     */
    public function getOriginalFileName(): string
    {
        return $this->originalFileName;
    }
    /**
     * The original file name
     *
     * @param string $originalFileName
     *
     * @return self
     */
    public function setOriginalFileName(string $originalFileName): self
    {
        $this->initialized['originalFileName'] = true;
        $this->originalFileName = $originalFileName;
        return $this;
    }
    /**
     * The size of the file in bytes
     *
     * @return string
     */
    public function getSizeInBytes(): string
    {
        return $this->sizeInBytes;
    }
    /**
     * The size of the file in bytes
     *
     * @param string $sizeInBytes
     *
     * @return self
     */
    public function setSizeInBytes(string $sizeInBytes): self
    {
        $this->initialized['sizeInBytes'] = true;
        $this->sizeInBytes = $sizeInBytes;
        return $this;
    }
    /**
     * The object key the file was stored as
     *
     * @return string
     */
    public function getStoredObjectKey(): string
    {
        return $this->storedObjectKey;
    }
    /**
     * The object key the file was stored as
     *
     * @param string $storedObjectKey
     *
     * @return self
     */
    public function setStoredObjectKey(string $storedObjectKey): self
    {
        $this->initialized['storedObjectKey'] = true;
        $this->storedObjectKey = $storedObjectKey;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['originalFileName' => ['original_file_name', 'getOriginalFileName', 'setOriginalFileName'], 'sizeInBytes' => ['size_in_bytes', 'getSizeInBytes', 'setSizeInBytes'], 'storedObjectKey' => ['stored_object_key', 'getStoredObjectKey', 'setStoredObjectKey']];
    }
}