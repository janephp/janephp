<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldOverwriteSingleTagbox extends FieldOverwriteBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An optional filter to limit the list items: this value will overwrite the existing Filter value specified in the parent schema  if
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
     * Json serialized template used for creating new list item: this value will overwrite the existing ListItemCreateTemplate value specified in the parent schema  if
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
    public function definedProperties(): array
    {
        return ['filter' => 'filter', 'overwriteFilter' => 'overwriteFilter', 'listItemCreateTemplate' => 'listItemCreateTemplate', 'overwriteListItemCreateTemplate' => 'overwriteListItemCreateTemplate'];
    }
}