<?php

namespace PicturePark\API\Model;

class JpegFormat extends FormatBase
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
     * Color profile to use. Colorspace is derived from the chosen profile.
     *
     * @var mixed|null
     */
    protected $colorProfile;
    /**
     * The method of conversion for color spaces (e.g. CMYK to RGB). Further information can be found here: http://www.colourphil.co.uk/rendering_intents.shtml
     *
     * @var mixed
     */
    protected $colorTransformationIntent;
    /**
     * Horizontal resolution in dpi (dots per inch)
     *
     * @var float|null
     */
    protected $horizontalResolution;
    /**
     * Vertical resolution in dpi (dots per inch)
     *
     * @var float|null
     */
    protected $verticalResolution;
    /**
     * Copy clipping paths from input.
     *
     * @var bool
     */
    protected $keepClippingPath;
    /**
     * Allows resizing of the image.
     *
     * @var mixed|null
     */
    protected $resizeAction;
    /**
     * A collection of actions to be applied during rendering.
     *
     * @var ImageActionBase[]|null
     */
    protected $actions;
    /**
     * Compression quality. Must be in range [0,100] and defaults to 80.
     *
     * @var int
     */
    protected $quality;
    /**
     * Whether to use chroma subsampling or not.
     *
     * @var bool
     */
    protected $chromaSubsamplingEnabled;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * Color profile to use. Colorspace is derived from the chosen profile.
     *
     * @return mixed
     */
    public function getColorProfile()
    {
        return $this->colorProfile;
    }
    /**
     * Color profile to use. Colorspace is derived from the chosen profile.
     *
     * @param mixed $colorProfile
     *
     * @return self
     */
    public function setColorProfile($colorProfile) : self
    {
        $this->initialized['colorProfile'] = true;
        $this->colorProfile = $colorProfile;
        return $this;
    }
    /**
     * The method of conversion for color spaces (e.g. CMYK to RGB). Further information can be found here: http://www.colourphil.co.uk/rendering_intents.shtml
     *
     * @return mixed
     */
    public function getColorTransformationIntent()
    {
        return $this->colorTransformationIntent;
    }
    /**
     * The method of conversion for color spaces (e.g. CMYK to RGB). Further information can be found here: http://www.colourphil.co.uk/rendering_intents.shtml
     *
     * @param mixed $colorTransformationIntent
     *
     * @return self
     */
    public function setColorTransformationIntent($colorTransformationIntent) : self
    {
        $this->initialized['colorTransformationIntent'] = true;
        $this->colorTransformationIntent = $colorTransformationIntent;
        return $this;
    }
    /**
     * Horizontal resolution in dpi (dots per inch)
     *
     * @return float|null
     */
    public function getHorizontalResolution() : ?float
    {
        return $this->horizontalResolution;
    }
    /**
     * Horizontal resolution in dpi (dots per inch)
     *
     * @param float|null $horizontalResolution
     *
     * @return self
     */
    public function setHorizontalResolution(?float $horizontalResolution) : self
    {
        $this->initialized['horizontalResolution'] = true;
        $this->horizontalResolution = $horizontalResolution;
        return $this;
    }
    /**
     * Vertical resolution in dpi (dots per inch)
     *
     * @return float|null
     */
    public function getVerticalResolution() : ?float
    {
        return $this->verticalResolution;
    }
    /**
     * Vertical resolution in dpi (dots per inch)
     *
     * @param float|null $verticalResolution
     *
     * @return self
     */
    public function setVerticalResolution(?float $verticalResolution) : self
    {
        $this->initialized['verticalResolution'] = true;
        $this->verticalResolution = $verticalResolution;
        return $this;
    }
    /**
     * Copy clipping paths from input.
     *
     * @return bool
     */
    public function getKeepClippingPath() : bool
    {
        return $this->keepClippingPath;
    }
    /**
     * Copy clipping paths from input.
     *
     * @param bool $keepClippingPath
     *
     * @return self
     */
    public function setKeepClippingPath(bool $keepClippingPath) : self
    {
        $this->initialized['keepClippingPath'] = true;
        $this->keepClippingPath = $keepClippingPath;
        return $this;
    }
    /**
     * Allows resizing of the image.
     *
     * @return mixed
     */
    public function getResizeAction()
    {
        return $this->resizeAction;
    }
    /**
     * Allows resizing of the image.
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
     * A collection of actions to be applied during rendering.
     *
     * @return ImageActionBase[]|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * A collection of actions to be applied during rendering.
     *
     * @param ImageActionBase[]|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions) : self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
    /**
     * Compression quality. Must be in range [0,100] and defaults to 80.
     *
     * @return int
     */
    public function getQuality() : int
    {
        return $this->quality;
    }
    /**
     * Compression quality. Must be in range [0,100] and defaults to 80.
     *
     * @param int $quality
     *
     * @return self
     */
    public function setQuality(int $quality) : self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;
        return $this;
    }
    /**
     * Whether to use chroma subsampling or not.
     *
     * @return bool
     */
    public function getChromaSubsamplingEnabled() : bool
    {
        return $this->chromaSubsamplingEnabled;
    }
    /**
     * Whether to use chroma subsampling or not.
     *
     * @param bool $chromaSubsamplingEnabled
     *
     * @return self
     */
    public function setChromaSubsamplingEnabled(bool $chromaSubsamplingEnabled) : self
    {
        $this->initialized['chromaSubsamplingEnabled'] = true;
        $this->chromaSubsamplingEnabled = $chromaSubsamplingEnabled;
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