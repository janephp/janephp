<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TakeDictionaryValueTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Key of the item.
     *
     * @var string|null
     */
    public ?string $key;
    public function definedProperties(): array
    {
        return ['key' => 'key'];
    }
}