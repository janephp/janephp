<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ClarifaiTaggingOptions extends TaggingOptionsBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Override for the model to use
     *
     * @var string|null
     */
    public ?string $model;
    /**
     * Override for the language to use
     *
     * @var string|null
     */
    public ?string $language;
    /**
     * Minimum value a concept must have to be considered
     *
     * @var string|null
     */
    public ?string $minimumValue;
    public function definedProperties(): array
    {
        return ['model' => 'model', 'language' => 'language', 'minimumValue' => 'minimumValue'];
    }
}