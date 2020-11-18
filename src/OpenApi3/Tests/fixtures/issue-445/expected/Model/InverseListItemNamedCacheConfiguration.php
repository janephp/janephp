<?php

namespace PicturePark\API\Model;

class InverseListItemNamedCacheConfiguration
{
    /**
     * Name of named cache.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @var bool
     */
    protected $caseSensitive;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Name of named cache.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of named cache.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @return bool
     */
    public function getCaseSensitive() : bool
    {
        return $this->caseSensitive;
    }
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @param bool $caseSensitive
     *
     * @return self
     */
    public function setCaseSensitive(bool $caseSensitive) : self
    {
        $this->caseSensitive = $caseSensitive;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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