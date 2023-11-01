<?php

namespace PicturePark\API\Model;

class Mp4VideoFormat extends FormatBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Allows resizing of the video.
     *
     * @var mixed|null
     */
    protected $resizeAction;
    /**
     * Gets or sets the encoding audio codec.
     *
     * @var mixed|null
     */
    protected $audioCodec;
    /**
     * Gets or sets the encoding codec preset.
     *
     * @var mixed
     */
    protected $preset;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * Allows resizing of the video.
     *
     * @return mixed
     */
    public function getResizeAction()
    {
        return $this->resizeAction;
    }
    /**
     * Allows resizing of the video.
     *
     * @param mixed $resizeAction
     *
     * @return self
     */
    public function setResizeAction($resizeAction) : self
    {
        $this->initialized['resizeAction'] = true;
        $this->resizeAction = $resizeAction;
        return $this;
    }
    /**
     * Gets or sets the encoding audio codec.
     *
     * @return mixed
     */
    public function getAudioCodec()
    {
        return $this->audioCodec;
    }
    /**
     * Gets or sets the encoding audio codec.
     *
     * @param mixed $audioCodec
     *
     * @return self
     */
    public function setAudioCodec($audioCodec) : self
    {
        $this->initialized['audioCodec'] = true;
        $this->audioCodec = $audioCodec;
        return $this;
    }
    /**
     * Gets or sets the encoding codec preset.
     *
     * @return mixed
     */
    public function getPreset()
    {
        return $this->preset;
    }
    /**
     * Gets or sets the encoding codec preset.
     *
     * @param mixed $preset
     *
     * @return self
     */
    public function setPreset($preset) : self
    {
        $this->initialized['preset'] = true;
        $this->preset = $preset;
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
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
}