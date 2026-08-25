<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldMultiTagbox extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the schema to be used as tagbox (it must be of type List).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @var SchemaIndexingInfo|null
     */
    protected $schemaIndexingInfo;
    /**
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    protected $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    protected $minimumItems;
    /**
     * An optional filter to limit the returned list items.
     *
     * @var FilterBase|null
     */
    protected $filter;
    /**
     * Json serialized template used for creating new list item (no logic is implemented in backend).
     *
     * @var string|null
     */
    protected $listItemCreateTemplate;
    /**
     * Defines the display pattern type to be used (Name or List only) when showing a tagbox item in view mode. Defaults to "Name".
     * The information is only consumed by the client application. No actual logic is implemented in the backend.
     *
     * @var string
     */
    protected $viewModeDisplayPatternType = 'Name';
    /**
     * The ID of the schema to be used as tagbox (it must be of type List).
     *
     * @return string
     */
    public function getSchemaId(): string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema to be used as tagbox (it must be of type List).
     *
     * @param string $schemaId
     *
     * @return self
     */
    public function setSchemaId(string $schemaId): self
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @return SchemaIndexingInfo|null
     */
    public function getSchemaIndexingInfo(): ?SchemaIndexingInfo
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @param SchemaIndexingInfo|null $schemaIndexingInfo
     *
     * @return self
     */
    public function setSchemaIndexingInfo(?SchemaIndexingInfo $schemaIndexingInfo): self
    {
        $this->initialized['schemaIndexingInfo'] = true;
        $this->schemaIndexingInfo = $schemaIndexingInfo;
        return $this;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @return int|null
     */
    public function getMaximumItems(): ?int
    {
        return $this->maximumItems;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @param int|null $maximumItems
     *
     * @return self
     */
    public function setMaximumItems(?int $maximumItems): self
    {
        $this->initialized['maximumItems'] = true;
        $this->maximumItems = $maximumItems;
        return $this;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @return int|null
     */
    public function getMinimumItems(): ?int
    {
        return $this->minimumItems;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @param int|null $minimumItems
     *
     * @return self
     */
    public function setMinimumItems(?int $minimumItems): self
    {
        $this->initialized['minimumItems'] = true;
        $this->minimumItems = $minimumItems;
        return $this;
    }
    /**
     * An optional filter to limit the returned list items.
     *
     * @return FilterBase|null
     */
    public function getFilter(): ?FilterBase
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the returned list items.
     *
     * @param FilterBase|null $filter
     *
     * @return self
     */
    public function setFilter(?FilterBase $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * Json serialized template used for creating new list item (no logic is implemented in backend).
     *
     * @return string|null
     */
    public function getListItemCreateTemplate(): ?string
    {
        return $this->listItemCreateTemplate;
    }
    /**
     * Json serialized template used for creating new list item (no logic is implemented in backend).
     *
     * @param string|null $listItemCreateTemplate
     *
     * @return self
     */
    public function setListItemCreateTemplate(?string $listItemCreateTemplate): self
    {
        $this->initialized['listItemCreateTemplate'] = true;
        $this->listItemCreateTemplate = $listItemCreateTemplate;
        return $this;
    }
    /**
     * Defines the display pattern type to be used (Name or List only) when showing a tagbox item in view mode. Defaults to "Name".
     * The information is only consumed by the client application. No actual logic is implemented in the backend.
     *
     * @return string
     */
    public function getViewModeDisplayPatternType(): string
    {
        return $this->viewModeDisplayPatternType;
    }
    /**
    * Defines the display pattern type to be used (Name or List only) when showing a tagbox item in view mode. Defaults to "Name".
    The information is only consumed by the client application. No actual logic is implemented in the backend.
    *
    * @param string $viewModeDisplayPatternType
    *
    * @return self
    */
    public function setViewModeDisplayPatternType(string $viewModeDisplayPatternType): self
    {
        $this->initialized['viewModeDisplayPatternType'] = true;
        $this->viewModeDisplayPatternType = $viewModeDisplayPatternType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['schemaId' => ['schemaId', 'getSchemaId', 'setSchemaId'], 'schemaIndexingInfo' => ['schemaIndexingInfo', 'getSchemaIndexingInfo', 'setSchemaIndexingInfo'], 'maximumItems' => ['maximumItems', 'getMaximumItems', 'setMaximumItems'], 'minimumItems' => ['minimumItems', 'getMinimumItems', 'setMinimumItems'], 'filter' => ['filter', 'getFilter', 'setFilter'], 'listItemCreateTemplate' => ['listItemCreateTemplate', 'getListItemCreateTemplate', 'setListItemCreateTemplate'], 'viewModeDisplayPatternType' => ['viewModeDisplayPatternType', 'getViewModeDisplayPatternType', 'setViewModeDisplayPatternType']];
    }
}