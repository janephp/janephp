<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignTagboxItemsInLayerAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Named cache to use for lookup, should be of type SchemaTagboxFilterLookupNamedCacheConfiguration
     *
     * @var string|null
     */
    public ?string $namedCache;
    /**
     * List of refIds of the items that should be assigned.
     *
     * @var mixed|null
     */
    public $refIds;
    /**
     * Indicates where the assignment should be additive to the already assigned tags
     * or if existing tags should be replaced.
     *
     * @var bool
     */
    public bool $replace;
    public function definedProperties(): array
    {
        return ['namedCache' => 'namedCache', 'refIds' => 'refIds', 'replace' => 'replace'];
    }
}