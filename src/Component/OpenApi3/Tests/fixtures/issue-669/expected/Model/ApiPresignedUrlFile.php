<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiPresignedUrlFile implements AdditionalPropertiesInterface
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
     * Local filename
     *
     * @var string
     */
    protected $fileName;
    /**
     * The size of the file in bytes.
     *
     * @var string
     */
    protected $fileSize;
    /**
     * Local filename
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * Local filename
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * The size of the file in bytes.
     *
     * @return string
     */
    public function getFileSize(): string
    {
        return $this->fileSize;
    }
    /**
     * The size of the file in bytes.
     *
     * @param string $fileSize
     *
     * @return self
     */
    public function setFileSize(string $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['fileName' => ['file_name', 'getFileName', 'setFileName'], 'fileSize' => ['file_size', 'getFileSize', 'setFileSize']];
    }
}