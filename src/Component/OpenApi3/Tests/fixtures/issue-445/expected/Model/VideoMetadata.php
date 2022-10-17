<?php

namespace PicturePark\API\Model;

class VideoMetadata extends \ArrayObject
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileExtension;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * 
     *
     * @var string|null
     */
    protected $filePath;
    /**
     * 
     *
     * @var int|null
     */
    protected $fileSizeInBytes;
    /**
     * 
     *
     * @var string|null
     */
    protected $sha1Hash;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $xmpMetadata;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $exifMetadata;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var int
     */
    protected $width;
    /**
     * 
     *
     * @var int
     */
    protected $height;
    /**
     * 
     *
     * @var float
     */
    protected $durationInSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $format;
    /**
     * 
     *
     * @var string|null
     */
    protected $codec;
    /**
     * 
     *
     * @var int|null
     */
    protected $overallBitrate;
    /**
     * 
     *
     * @var VideoStream[]|null
     */
    protected $videoStreams;
    /**
     * 
     *
     * @var AudioStream[]|null
     */
    protected $audioStreams;
    /**
     * 
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * 
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * 
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions) : self
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileExtension() : ?string
    {
        return $this->fileExtension;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFilePath() : ?string
    {
        return $this->filePath;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getFileSizeInBytes() : ?int
    {
        return $this->fileSizeInBytes;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
    /**
     * 
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
     * 
     *
     * @return mixed
     */
    public function getXmpMetadata()
    {
        return $this->xmpMetadata;
    }
    /**
     * 
     *
     * @param mixed $xmpMetadata
     *
     * @return self
     */
    public function setXmpMetadata($xmpMetadata) : self
    {
        $this->xmpMetadata = $xmpMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getExifMetadata()
    {
        return $this->exifMetadata;
    }
    /**
     * 
     *
     * @param mixed $exifMetadata
     *
     * @return self
     */
    public function setExifMetadata($exifMetadata) : self
    {
        $this->exifMetadata = $exifMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * 
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
     * 
     *
     * @return float
     */
    public function getDurationInSeconds() : float
    {
        return $this->durationInSeconds;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCodec() : ?string
    {
        return $this->codec;
    }
    /**
     * 
     *
     * @param string|null $codec
     *
     * @return self
     */
    public function setCodec(?string $codec) : self
    {
        $this->codec = $codec;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOverallBitrate() : ?int
    {
        return $this->overallBitrate;
    }
    /**
     * 
     *
     * @param int|null $overallBitrate
     *
     * @return self
     */
    public function setOverallBitrate(?int $overallBitrate) : self
    {
        $this->overallBitrate = $overallBitrate;
        return $this;
    }
    /**
     * 
     *
     * @return VideoStream[]|null
     */
    public function getVideoStreams() : ?array
    {
        return $this->videoStreams;
    }
    /**
     * 
     *
     * @param VideoStream[]|null $videoStreams
     *
     * @return self
     */
    public function setVideoStreams(?array $videoStreams) : self
    {
        $this->videoStreams = $videoStreams;
        return $this;
    }
    /**
     * 
     *
     * @return AudioStream[]|null
     */
    public function getAudioStreams() : ?array
    {
        return $this->audioStreams;
    }
    /**
     * 
     *
     * @param AudioStream[]|null $audioStreams
     *
     * @return self
     */
    public function setAudioStreams(?array $audioStreams) : self
    {
        $this->audioStreams = $audioStreams;
        return $this;
    }
}