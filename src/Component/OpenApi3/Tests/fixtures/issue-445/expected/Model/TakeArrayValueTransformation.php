<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TakeArrayValueTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Index of the item.
     *
     * @var string|null
     */
    public ?string $index;
    public function definedProperties(): array
    {
        return ['index' => 'index'];
    }
}