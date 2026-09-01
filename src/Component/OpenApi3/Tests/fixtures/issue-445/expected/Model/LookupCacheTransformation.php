<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class LookupCacheTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the cache to use.
     *
     * @var string|null
     */
    public ?string $namedCache;
    public function definedProperties(): array
    {
        return ['namedCache' => 'namedCache'];
    }
}