<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OriginalFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $extension;
    public function definedProperties(): array
    {
        return ['extension' => 'extension'];
    }
}