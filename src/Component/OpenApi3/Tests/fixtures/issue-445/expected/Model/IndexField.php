<?php

namespace PicturePark\API\Model;

class IndexField
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * The field id.
     *
     * @var string|null
     */
    protected $fieldId;
    /**
     * The field's type name.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Contains all index field name variants of the field.
     *
     * @var string[]|null
     */
    protected $indexFields;
    /**
    * Contains all simple search field name variants of the field.
    The amount of simple search fields can be equal or less to the amount of IndexFields, but never more.
    *
    * @var string[]|null
    */
    protected $simpleSearchFields;
    /**
     * Contains the fields boost value.
     *
     * @var float
     */
    protected $boost;
    /**
     * Not to be returned for search query, but only used for mapping purposes
     *
     * @var bool
     */
    protected $ignoreForSearch;
    /**
     * The path of the Nested document this property belongs to. If set to null, it means that there is no Nested document
     *
     * @var string|null
     */
    protected $nestedPath;
    /**
     * Path to the sorting information in the DataSortValuesField sort index.
     *
     * @var string|null
     */
    protected $sortField;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The field id.
     *
     * @return string|null
     */
    public function getFieldId() : ?string
    {
        return $this->fieldId;
    }
    /**
     * The field id.
     *
     * @param string|null $fieldId
     *
     * @return self
     */
    public function setFieldId(?string $fieldId) : self
    {
        $this->initialized['fieldId'] = true;
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     * The field's type name.
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The field's type name.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Contains all index field name variants of the field.
     *
     * @return string[]|null
     */
    public function getIndexFields() : ?iterable
    {
        return $this->indexFields;
    }
    /**
     * Contains all index field name variants of the field.
     *
     * @param string[]|null $indexFields
     *
     * @return self
     */
    public function setIndexFields(?iterable $indexFields) : self
    {
        $this->initialized['indexFields'] = true;
        $this->indexFields = $indexFields;
        return $this;
    }
    /**
    * Contains all simple search field name variants of the field.
    The amount of simple search fields can be equal or less to the amount of IndexFields, but never more.
    *
    * @return string[]|null
    */
    public function getSimpleSearchFields() : ?iterable
    {
        return $this->simpleSearchFields;
    }
    /**
    * Contains all simple search field name variants of the field.
    The amount of simple search fields can be equal or less to the amount of IndexFields, but never more.
    *
    * @param string[]|null $simpleSearchFields
    *
    * @return self
    */
    public function setSimpleSearchFields(?iterable $simpleSearchFields) : self
    {
        $this->initialized['simpleSearchFields'] = true;
        $this->simpleSearchFields = $simpleSearchFields;
        return $this;
    }
    /**
     * Contains the fields boost value.
     *
     * @return float
     */
    public function getBoost() : float
    {
        return $this->boost;
    }
    /**
     * Contains the fields boost value.
     *
     * @param float $boost
     *
     * @return self
     */
    public function setBoost(float $boost) : self
    {
        $this->initialized['boost'] = true;
        $this->boost = $boost;
        return $this;
    }
    /**
     * Not to be returned for search query, but only used for mapping purposes
     *
     * @return bool
     */
    public function getIgnoreForSearch() : bool
    {
        return $this->ignoreForSearch;
    }
    /**
     * Not to be returned for search query, but only used for mapping purposes
     *
     * @param bool $ignoreForSearch
     *
     * @return self
     */
    public function setIgnoreForSearch(bool $ignoreForSearch) : self
    {
        $this->initialized['ignoreForSearch'] = true;
        $this->ignoreForSearch = $ignoreForSearch;
        return $this;
    }
    /**
     * The path of the Nested document this property belongs to. If set to null, it means that there is no Nested document
     *
     * @return string|null
     */
    public function getNestedPath() : ?string
    {
        return $this->nestedPath;
    }
    /**
     * The path of the Nested document this property belongs to. If set to null, it means that there is no Nested document
     *
     * @param string|null $nestedPath
     *
     * @return self
     */
    public function setNestedPath(?string $nestedPath) : self
    {
        $this->initialized['nestedPath'] = true;
        $this->nestedPath = $nestedPath;
        return $this;
    }
    /**
     * Path to the sorting information in the DataSortValuesField sort index.
     *
     * @return string|null
     */
    public function getSortField() : ?string
    {
        return $this->sortField;
    }
    /**
     * Path to the sorting information in the DataSortValuesField sort index.
     *
     * @param string|null $sortField
     *
     * @return self
     */
    public function setSortField(?string $sortField) : self
    {
        $this->initialized['sortField'] = true;
        $this->sortField = $sortField;
        return $this;
    }
}