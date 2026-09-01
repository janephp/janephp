<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AlphaHandlingAction extends ImageActionBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Specifies the kind of alpha handling to be applied.
     *
     * @var string
     */
    public string $alphaHandling;
    /**
     * Specifies potentially needed color information for alpha handling. Must be given in RGB hex format (8 bit per channel).
     *
     * @var string|null
     */
    public ?string $replacementRgbColorHexCode;
    public function definedProperties(): array
    {
        return ['alphaHandling' => 'alphaHandling', 'replacementRgbColorHexCode' => 'replacementRgbColorHexCode'];
    }
}