<?php

namespace PicturePark\API\Model;

class OutputDataDocument
{
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
     * Number of document's pages.
     *
     * @var int
     */
    protected $pageCount;
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
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension) : self
    {
        $this->fileExtension = $fileExtension;
        return $this;
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
     *
     * @return self
     */
    public function setFilePath(?string $filePath) : self
    {
        $this->filePath = $filePath;
        return $this;
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
     *
     * @return self
     */
    public function setFileSizeInBytes(?int $fileSizeInBytes) : self
    {
        $this->fileSizeInBytes = $fileSizeInBytes;
        return $this;
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
     *
     * @return self
     */
    public function setSha1Hash(?string $sha1Hash) : self
    {
        $this->sha1Hash = $sha1Hash;
        return $this;
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
     *
     * @return self
     */
    public function setOriginalFileName(?string $originalFileName) : self
    {
        $this->originalFileName = $originalFileName;
        return $this;
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
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Number of document's pages.
     *
     * @return int
     */
    public function getPageCount() : int
    {
        return $this->pageCount;
    }
    /**
     * Number of document's pages.
     *
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount(int $pageCount) : self
    {
        $this->pageCount = $pageCount;
        return $this;
    }
}