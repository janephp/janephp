<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldOverwriteMultiTagbox extends FieldOverwriteBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An optional filter to limit the list items: this value will overwrite the existing Filter value specified in the parent schema if
     * OverwriteFilter is set to true.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Enable the overwriting of the Filter property of the field specified by the Id property.
     *
     * @var bool
     */
    public bool $overwriteFilter;
    /**
     * Json serialized template used for creating new list item: this value will overwrite the existing ListItemCreateTemplate value specified in the parent schema if
     * OverwriteListItemCreateTemplate is set to true.
     *
     * @var string|null
     */
    public ?string $listItemCreateTemplate;
    /**
     * Enable the overwriting of the ListItemCreateTemplate property of the field specified by the Id property.
     *
     * @var bool
     */
    public bool $overwriteListItemCreateTemplate;
    /**
     * The maximum number of items that can be stored: this value will overwrite the existing MaximumItems value specified in the parent schema if
     * OverwriteMaximumItems is set to true.
     *
     * @var int|null
     */
    public ?int $maximumItems;
    /**
     * Enable the overwriting of the MaximumItems property of the field specified by the Id property.
     *
     * @var bool
     */
    public bool $overwriteMaximumItems;
    /**
     * The minimum number of items that must be stored: this value will overwrite the existing MinimumItems value specified in the parent schema if
     * OverwriteMinimumItems is set to true.
     *
     * @var int|null
     */
    public ?int $minimumItems;
    /**
     * Enable the overwriting of the MinimumItems property of the field specified by the Id property.
     *
     * @var bool
     */
    public bool $overwriteMinimumItems;
    public function definedProperties(): array
    {
        return ['filter' => 'filter', 'overwriteFilter' => 'overwriteFilter', 'listItemCreateTemplate' => 'listItemCreateTemplate', 'overwriteListItemCreateTemplate' => 'overwriteListItemCreateTemplate', 'maximumItems' => 'maximumItems', 'overwriteMaximumItems' => 'overwriteMaximumItems', 'minimumItems' => 'minimumItems', 'overwriteMinimumItems' => 'overwriteMinimumItems'];
    }
}