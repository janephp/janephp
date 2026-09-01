<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class WatermarkAction extends ImageActionBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Identifies the image to be used as watermark
     *
     * @var string|null
     */
    public ?string $watermarkFilePath;
    /**
     * Margin to the left border of the image, in pixels
     *
     * @var int|null
     */
    public ?int $marginLeft;
    /**
     * Margin to the top of the image, in pixels
     *
     * @var int|null
     */
    public ?int $marginTop;
    /**
     * Margin to the right border of the image, in pixels
     *
     * @var int|null
     */
    public ?int $marginRight;
    /**
     * Margin to the bottom of the image, in pixels
     *
     * @var int|null
     */
    public ?int $marginBottom;
    /**
     * Scales the opacity of the watermark
     *
     * @var float
     */
    public float $opacity;
    /**
     * Scales the watermark width according to the size of the final image.
     *
     * @var float
     */
    public float $widthRatio;
    /**
     * Scales the watermark height according to the size of the final image.
     *
     * @var float
     */
    public float $heightRatio;
    public function definedProperties(): array
    {
        return ['watermarkFilePath' => 'watermarkFilePath', 'marginLeft' => 'marginLeft', 'marginTop' => 'marginTop', 'marginRight' => 'marginRight', 'marginBottom' => 'marginBottom', 'opacity' => 'opacity', 'widthRatio' => 'widthRatio', 'heightRatio' => 'heightRatio'];
    }
}