<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiPresignedUrlFile extends \ArrayObject
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
}