<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SimulatedTaggingOptions extends TaggingOptionsBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of keywords to assign.
     *
     * @var string|null
     */
    public ?string $numberOfKeywords;
    public function definedProperties(): array
    {
        return ['numberOfKeywords' => 'numberOfKeywords'];
    }
}