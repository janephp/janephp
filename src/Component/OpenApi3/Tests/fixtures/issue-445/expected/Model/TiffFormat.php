<?php

namespace PicturePark\API\Model;

class TiffFormat extends FormatBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Specifies whether color channels should be premultiplied with alpha (associated alpha) or not (unassociated alpha).
     *
     * @var bool
     */
    protected $alphaPremultiplied;
    /**
     * Specifies the compression type to use.
     *
     * @var mixed
     */
    protected $compressionType;
    /**
     * Preserve (including size affecting changes) unspecified extraChannels.
     *
     * @var bool
     */
    protected $includeUnspecifiedTiffExtraChannels;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
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
        $this->actions = $actions;
        return $this;
    }
    /**
     * Specifies whether color channels should be premultiplied with alpha (associated alpha) or not (unassociated alpha).
     *
     * @return bool
     */
    public function getAlphaPremultiplied() : bool
    {
        return $this->alphaPremultiplied;
    }
    /**
     * Specifies whether color channels should be premultiplied with alpha (associated alpha) or not (unassociated alpha).
     *
     * @param bool $alphaPremultiplied
     *
     * @return self
     */
    public function setAlphaPremultiplied(bool $alphaPremultiplied) : self
    {
        $this->alphaPremultiplied = $alphaPremultiplied;
        return $this;
    }
    /**
     * Specifies the compression type to use.
     *
     * @return mixed
     */
    public function getCompressionType()
    {
        return $this->compressionType;
    }
    /**
     * Specifies the compression type to use.
     *
     * @param mixed $compressionType
     *
     * @return self
     */
    public function setCompressionType($compressionType) : self
    {
        $this->compressionType = $compressionType;
        return $this;
    }
    /**
     * Preserve (including size affecting changes) unspecified extraChannels.
     *
     * @return bool
     */
    public function getIncludeUnspecifiedTiffExtraChannels() : bool
    {
        return $this->includeUnspecifiedTiffExtraChannels;
    }
    /**
     * Preserve (including size affecting changes) unspecified extraChannels.
     *
     * @param bool $includeUnspecifiedTiffExtraChannels
     *
     * @return self
     */
    public function setIncludeUnspecifiedTiffExtraChannels(bool $includeUnspecifiedTiffExtraChannels) : self
    {
        $this->includeUnspecifiedTiffExtraChannels = $includeUnspecifiedTiffExtraChannels;
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
}