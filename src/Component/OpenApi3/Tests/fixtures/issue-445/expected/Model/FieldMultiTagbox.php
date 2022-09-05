<?php

namespace PicturePark\API\Model;

class FieldMultiTagbox extends FieldBase
{
    /**
     * The ID of the schema to be used as tagbox (it must be of type List).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @var mixed|null
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
     * @var mixed|null
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
    The information is only consumed by the client application. No actual logic is implemented in the backend.
    *
    * @var mixed
    */
    protected $viewModeDisplayPatternType = 'Name';
    /**
     * The ID of the schema to be used as tagbox (it must be of type List).
     *
     * @return string
     */
    public function getSchemaId() : string
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
    public function setSchemaId(string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @return mixed
     */
    public function getSchemaIndexingInfo()
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @param mixed $schemaIndexingInfo
     *
     * @return self
     */
    public function setSchemaIndexingInfo($schemaIndexingInfo) : self
    {
        $this->schemaIndexingInfo = $schemaIndexingInfo;
        return $this;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @return int|null
     */
    public function getMaximumItems() : ?int
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
    public function setMaximumItems(?int $maximumItems) : self
    {
        $this->maximumItems = $maximumItems;
        return $this;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @return int|null
     */
    public function getMinimumItems() : ?int
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
    public function setMinimumItems(?int $minimumItems) : self
    {
        $this->minimumItems = $minimumItems;
        return $this;
    }
    /**
     * An optional filter to limit the returned list items.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the returned list items.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * Json serialized template used for creating new list item (no logic is implemented in backend).
     *
     * @return string|null
     */
    public function getListItemCreateTemplate() : ?string
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
    public function setListItemCreateTemplate(?string $listItemCreateTemplate) : self
    {
        $this->listItemCreateTemplate = $listItemCreateTemplate;
        return $this;
    }
    /**
    * Defines the display pattern type to be used (Name or List only) when showing a tagbox item in view mode. Defaults to "Name".
    The information is only consumed by the client application. No actual logic is implemented in the backend.
    *
    * @return mixed
    */
    public function getViewModeDisplayPatternType()
    {
        return $this->viewModeDisplayPatternType;
    }
    /**
    * Defines the display pattern type to be used (Name or List only) when showing a tagbox item in view mode. Defaults to "Name".
    The information is only consumed by the client application. No actual logic is implemented in the backend.
    *
    * @param mixed $viewModeDisplayPatternType
    *
    * @return self
    */
    public function setViewModeDisplayPatternType($viewModeDisplayPatternType) : self
    {
        $this->viewModeDisplayPatternType = $viewModeDisplayPatternType;
        return $this;
    }
}