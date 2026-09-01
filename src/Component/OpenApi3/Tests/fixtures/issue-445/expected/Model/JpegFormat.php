<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class JpegFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Color profile to use. Colorspace is derived from the chosen profile.
     *
     * @var string|null
     */
    public ?string $colorProfile;
    /**
     * The method of conversion for color spaces (e.g. CMYK to RGB). Further information can be found here: http://www.colourphil.co.uk/rendering_intents.shtml
     *
     * @var string
     */
    public string $colorTransformationIntent;
    /**
     * Horizontal resolution in dpi (dots per inch)
     *
     * @var float|null
     */
    public ?float $horizontalResolution;
    /**
     * Vertical resolution in dpi (dots per inch)
     *
     * @var float|null
     */
    public ?float $verticalResolution;
    /**
     * Copy clipping paths from input.
     *
     * @var bool
     */
    public bool $keepClippingPath;
    /**
     * Allows resizing of the image.
     *
     * @var ResizeAction|null
     */
    public ?ResizeAction $resizeAction;
    /**
     * A collection of actions to be applied during rendering.
     *
     * @var list<ImageActionBase>|null
     */
    public ?array $actions;
    /**
     * Compression quality. Must be in range [0,100] and defaults to 80.
     *
     * @var int
     */
    public int $quality;
    /**
     * Whether to use chroma subsampling or not.
     *
     * @var bool
     */
    public bool $chromaSubsamplingEnabled;
    /**
     * @var string|null
     */
    public ?string $extension;
    public function definedProperties(): array
    {
        return ['colorProfile' => 'colorProfile', 'colorTransformationIntent' => 'colorTransformationIntent', 'horizontalResolution' => 'horizontalResolution', 'verticalResolution' => 'verticalResolution', 'keepClippingPath' => 'keepClippingPath', 'resizeAction' => 'resizeAction', 'actions' => 'actions', 'quality' => 'quality', 'chromaSubsamplingEnabled' => 'chromaSubsamplingEnabled', 'extension' => 'extension'];
    }
}