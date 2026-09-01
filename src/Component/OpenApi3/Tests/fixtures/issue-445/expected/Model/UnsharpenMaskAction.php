<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UnsharpenMaskAction extends ImageActionBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unsharp mask amount (the difference between blurred and original image).
     *
     * @var float
     */
    public float $amount;
    /**
     * Blur radius used to produce unfocused version of the image.
     *
     * @var float
     */
    public float $radius;
    /**
     * The threshold value for the unsharp mask in range [0, 1]
     *
     * @var float
     */
    public float $threshold;
    public function definedProperties(): array
    {
        return ['amount' => 'amount', 'radius' => 'radius', 'threshold' => 'threshold'];
    }
}