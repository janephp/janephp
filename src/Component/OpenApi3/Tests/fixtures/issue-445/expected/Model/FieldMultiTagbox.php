<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldMultiTagbox extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the schema to be used as tagbox (it must be of type List).
     *
     * @var string
     */
    public string $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @var SchemaIndexingInfo|null
     */
    public ?SchemaIndexingInfo $schemaIndexingInfo;
    /**
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    public ?int $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    public ?int $minimumItems;
    /**
     * An optional filter to limit the returned list items.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Json serialized template used for creating new list item (no logic is implemented in backend).
     *
     * @var string|null
     */
    public ?string $listItemCreateTemplate;
    /**
     * Defines the display pattern type to be used (Name or List only) when showing a tagbox item in view mode. Defaults to "Name".
     * The information is only consumed by the client application. No actual logic is implemented in the backend.
     *
     * @var string
     */
    public string $viewModeDisplayPatternType = 'Name';
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId', 'schemaIndexingInfo' => 'schemaIndexingInfo', 'maximumItems' => 'maximumItems', 'minimumItems' => 'minimumItems', 'filter' => 'filter', 'listItemCreateTemplate' => 'listItemCreateTemplate', 'viewModeDisplayPatternType' => 'viewModeDisplayPatternType'];
    }
}