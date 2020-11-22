<?php

namespace PicturePark\API\Model;

class OutputDataVideo
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
     * Duration of the video in seconds.
     *
     * @var float
     */
    protected $durationInSeconds;
    /**
     * With of the video.
     *
     * @var int
     */
    protected $width;
    /**
     * Height of the video.
     *
     * @var int
     */
    protected $height;
    /**
     * The sprites making up the key frames of the video.
     *
     * @var Sprite[]|null
     */
    protected $sprites;
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
     * Duration of the video in seconds.
     *
     * @return float
     */
    public function getDurationInSeconds() : float
    {
        return $this->durationInSeconds;
    }
    /**
     * Duration of the video in seconds.
     *
     * @param float $durationInSeconds
     *
     * @return self
     */
    public function setDurationInSeconds(float $durationInSeconds) : self
    {
        $this->durationInSeconds = $durationInSeconds;
        return $this;
    }
    /**
     * With of the video.
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * With of the video.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * Height of the video.
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * Height of the video.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * The sprites making up the key frames of the video.
     *
     * @return Sprite[]|null
     */
    public function getSprites() : ?array
    {
        return $this->sprites;
    }
    /**
     * The sprites making up the key frames of the video.
     *
     * @param Sprite[]|null $sprites
     *
     * @return self
     */
    public function setSprites(?array $sprites) : self
    {
        $this->sprites = $sprites;
        return $this;
    }
}