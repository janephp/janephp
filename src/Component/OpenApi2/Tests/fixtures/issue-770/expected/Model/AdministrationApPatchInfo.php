<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationApPatchInfo
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
     * file name of the upload file
     *
     * @var string
     */
    protected $fileName;
    /**
     * file size(Byte) of the upload file
     *
     * @var int
     */
    protected $fileSize;
    /**
     * ApFwVersion of the upload file
     *
     * @var string
     */
    protected $apVersion;
    /**
     * AP Models of the upload file
     *
     * @var list<string>
     */
    protected $apModels;
    /**
     * file name of the upload file
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * file name of the upload file
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
     * file size(Byte) of the upload file
     *
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }
    /**
     * file size(Byte) of the upload file
     *
     * @param int $fileSize
     *
     * @return self
     */
    public function setFileSize(int $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * ApFwVersion of the upload file
     *
     * @return string
     */
    public function getApVersion(): string
    {
        return $this->apVersion;
    }
    /**
     * ApFwVersion of the upload file
     *
     * @param string $apVersion
     *
     * @return self
     */
    public function setApVersion(string $apVersion): self
    {
        $this->initialized['apVersion'] = true;
        $this->apVersion = $apVersion;
        return $this;
    }
    /**
     * AP Models of the upload file
     *
     * @return list<string>
     */
    public function getApModels(): array
    {
        return $this->apModels;
    }
    /**
     * AP Models of the upload file
     *
     * @param list<string> $apModels
     *
     * @return self
     */
    public function setApModels(array $apModels): self
    {
        $this->initialized['apModels'] = true;
        $this->apModels = $apModels;
        return $this;
    }
}