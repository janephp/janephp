<?php

namespace PicturePark\API\Model;

class FileMetadata
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
     * @var array<string, string>|null
     */
    protected $names;
    /**
     * @var array<string, string>|null
     */
    protected $descriptions;
    /**
     * @var string|null
     */
    protected $fileExtension;
    /**
     * @var string|null
     */
    protected $fileName;
    /**
     * @var string|null
     */
    protected $filePath;
    /**
     * @var int|null
     */
    protected $fileSizeInBytes;
    /**
     * @var string|null
     */
    protected $sha1Hash;
    /**
     * @var mixed|null
     */
    protected $xmpMetadata;
    /**
     * @var mixed|null
     */
    protected $exifMetadata;
    /**
     * @var string|null
     */
    protected $language;
    /**
     * @return array<string, string>|null
     */
    public function getNames(): ?iterable
    {
        return $this->names;
    }
    /**
     * @param array<string, string>|null $names
     *
     * @return self
     */
    public function setNames(?iterable $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * @return array<string, string>|null
     */
    public function getDescriptions(): ?iterable
    {
        return $this->descriptions;
    }
    /**
     * @param array<string, string>|null $descriptions
     *
     * @return self
     */
    public function setDescriptions(?iterable $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }
    /**
     * @param string|null $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension): self
    {
        $this->initialized['fileExtension'] = true;
        $this->fileExtension = $fileExtension;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }
    /**
     * @param string|null $filePath
     *
     * @return self
     */
    public function setFilePath(?string $filePath): self
    {
        $this->initialized['filePath'] = true;
        $this->filePath = $filePath;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getFileSizeInBytes(): ?int
    {
        return $this->fileSizeInBytes;
    }
    /**
     * @param int|null $fileSizeInBytes
     *
     * @return self
     */
    public function setFileSizeInBytes(?int $fileSizeInBytes): self
    {
        $this->initialized['fileSizeInBytes'] = true;
        $this->fileSizeInBytes = $fileSizeInBytes;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSha1Hash(): ?string
    {
        return $this->sha1Hash;
    }
    /**
     * @param string|null $sha1Hash
     *
     * @return self
     */
    public function setSha1Hash(?string $sha1Hash): self
    {
        $this->initialized['sha1Hash'] = true;
        $this->sha1Hash = $sha1Hash;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getXmpMetadata()
    {
        return $this->xmpMetadata;
    }
    /**
     * @param mixed $xmpMetadata
     *
     * @return self
     */
    public function setXmpMetadata($xmpMetadata): self
    {
        $this->initialized['xmpMetadata'] = true;
        $this->xmpMetadata = $xmpMetadata;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExifMetadata()
    {
        return $this->exifMetadata;
    }
    /**
     * @param mixed $exifMetadata
     *
     * @return self
     */
    public function setExifMetadata($exifMetadata): self
    {
        $this->initialized['exifMetadata'] = true;
        $this->exifMetadata = $exifMetadata;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}