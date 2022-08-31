<?php

namespace PicturePark\API\Model;

class Mp3AudioFormat extends FormatBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * Gets or sets the encoding bitrate. This setting and Quality are mutually exclusive.
     *
     * @var int|null
     */
    protected $bitrate;
    /**
    * Gets or sets the encoding quality. This setting and Bitrate are mutually exclusive.
    Values can be set it range of 0 to 9, where a lower value is a higher quality.
    *
    * @var int|null
    */
    protected $quality;
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
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->extension = $extension;
        return $this;
    }
    /**
     * Gets or sets the encoding bitrate. This setting and Quality are mutually exclusive.
     *
     * @return int|null
     */
    public function getBitrate() : ?int
    {
        return $this->bitrate;
    }
    /**
     * Gets or sets the encoding bitrate. This setting and Quality are mutually exclusive.
     *
     * @param int|null $bitrate
     *
     * @return self
     */
    public function setBitrate(?int $bitrate) : self
    {
        $this->bitrate = $bitrate;
        return $this;
    }
    /**
    * Gets or sets the encoding quality. This setting and Bitrate are mutually exclusive.
    Values can be set it range of 0 to 9, where a lower value is a higher quality.
    *
    * @return int|null
    */
    public function getQuality() : ?int
    {
        return $this->quality;
    }
    /**
    * Gets or sets the encoding quality. This setting and Bitrate are mutually exclusive.
    Values can be set it range of 0 to 9, where a lower value is a higher quality.
    *
    * @param int|null $quality
    *
    * @return self
    */
    public function setQuality(?int $quality) : self
    {
        $this->quality = $quality;
        return $this;
    }
}