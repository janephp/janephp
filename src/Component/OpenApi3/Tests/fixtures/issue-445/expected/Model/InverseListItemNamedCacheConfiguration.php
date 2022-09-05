<?php

namespace PicturePark\API\Model;

class InverseListItemNamedCacheConfiguration extends NamedCacheConfigurationBase
{
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     * ID of the field that yields the value
     *
     * @var string|null
     */
    protected $valueField;
    /**
     * An optional filter to narrow down the cached list items
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Include child schemas when caching list items
     *
     * @var bool
     */
    protected $includeAllSchemaChildren;
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @return string|null
     */
    public function getSchemaId() : ?string
    {
        return $this->schemaId;
    }
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * ID of the field that yields the value
     *
     * @return string|null
     */
    public function getValueField() : ?string
    {
        return $this->valueField;
    }
    /**
     * ID of the field that yields the value
     *
     * @param string|null $valueField
     *
     * @return self
     */
    public function setValueField(?string $valueField) : self
    {
        $this->valueField = $valueField;
        return $this;
    }
    /**
     * An optional filter to narrow down the cached list items
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to narrow down the cached list items
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
     * Include child schemas when caching list items
     *
     * @return bool
     */
    public function getIncludeAllSchemaChildren() : bool
    {
        return $this->includeAllSchemaChildren;
    }
    /**
     * Include child schemas when caching list items
     *
     * @param bool $includeAllSchemaChildren
     *
     * @return self
     */
    public function setIncludeAllSchemaChildren(bool $includeAllSchemaChildren) : self
    {
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
}