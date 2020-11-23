<?php

namespace PicturePark\API\Model;

class AacAudioFormat
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
     * Gets or sets the encoding profile.
     *
     * @var mixed
     */
    protected $profile;
    /**
     * Gets or sets the encoding coder.
     *
     * @var mixed
     */
    protected $coder;
    /**
     * Gets or sets the bitrate of the encoding in kbps.
     *
     * @var int|null
     */
    protected $bitrate;
    /**
     * Gets or sets the encoding variable bit rate (VBR) - 1 is lowest quality and 5 is highest quality.
     *
     * @var int|null
     */
    protected $variableBitRate;
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
     * Gets or sets the encoding profile.
     *
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * Gets or sets the encoding profile.
     *
     * @param mixed $profile
     *
     * @return self
     */
    public function setProfile($profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
    /**
     * Gets or sets the encoding coder.
     *
     * @return mixed
     */
    public function getCoder()
    {
        return $this->coder;
    }
    /**
     * Gets or sets the encoding coder.
     *
     * @param mixed $coder
     *
     * @return self
     */
    public function setCoder($coder) : self
    {
        $this->coder = $coder;
        return $this;
    }
    /**
     * Gets or sets the bitrate of the encoding in kbps.
     *
     * @return int|null
     */
    public function getBitrate() : ?int
    {
        return $this->bitrate;
    }
    /**
     * Gets or sets the bitrate of the encoding in kbps.
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
     * Gets or sets the encoding variable bit rate (VBR) - 1 is lowest quality and 5 is highest quality.
     *
     * @return int|null
     */
    public function getVariableBitRate() : ?int
    {
        return $this->variableBitRate;
    }
    /**
     * Gets or sets the encoding variable bit rate (VBR) - 1 is lowest quality and 5 is highest quality.
     *
     * @param int|null $variableBitRate
     *
     * @return self
     */
    public function setVariableBitRate(?int $variableBitRate) : self
    {
        $this->variableBitRate = $variableBitRate;
        return $this;
    }
}