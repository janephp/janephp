<?php

namespace PicturePark\API\Model;

class OutputDataBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The extension of the file.
     *
     * @var string|null
     */
    protected $fileExtension;
    /**
     * The path where the file is stored.
     *
     * @var string|null
     */
    protected $filePath;
    /**
     * The size of the file in bytes.
     *
     * @var int|null
     */
    protected $fileSizeInBytes;
    /**
     * The SHA-1 hash of the file.
     *
     * @var string|null
     */
    protected $sha1Hash;
    /**
     * The original filename of the file.
     *
     * @var string|null
     */
    protected $originalFileName;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The extension of the file.
     *
     * @return string|null
     */
    public function getFileExtension() : ?string
    {
        return $this->fileExtension;
    }
    /**
     * The extension of the file.
     *
     * @param string|null $fileExtension
     */
    public function setFileExtension(?string $fileExtension)
    {
        $this->initialized['fileExtension'] = true;
        $this->fileExtension = $fileExtension;
    }
    /**
     * The path where the file is stored.
     *
     * @return string|null
     */
    public function getFilePath() : ?string
    {
        return $this->filePath;
    }
    /**
     * The path where the file is stored.
     *
     * @param string|null $filePath
     */
    public function setFilePath(?string $filePath)
    {
        $this->initialized['filePath'] = true;
        $this->filePath = $filePath;
    }
    /**
     * The size of the file in bytes.
     *
     * @return int|null
     */
    public function getFileSizeInBytes() : ?int
    {
        return $this->fileSizeInBytes;
    }
    /**
     * The size of the file in bytes.
     *
     * @param int|null $fileSizeInBytes
     */
    public function setFileSizeInBytes(?int $fileSizeInBytes)
    {
        $this->initialized['fileSizeInBytes'] = true;
        $this->fileSizeInBytes = $fileSizeInBytes;
    }
    /**
     * The SHA-1 hash of the file.
     *
     * @return string|null
     */
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
    /**
     * The SHA-1 hash of the file.
     *
     * @param string|null $sha1Hash
     */
    public function setSha1Hash(?string $sha1Hash)
    {
        $this->initialized['sha1Hash'] = true;
        $this->sha1Hash = $sha1Hash;
    }
    /**
     * The original filename of the file.
     *
     * @return string|null
     */
    public function getOriginalFileName() : ?string
    {
        return $this->originalFileName;
    }
    /**
     * The original filename of the file.
     *
     * @param string|null $originalFileName
     */
    public function setOriginalFileName(?string $originalFileName)
    {
        $this->initialized['originalFileName'] = true;
        $this->originalFileName = $originalFileName;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}