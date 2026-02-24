<?php

namespace PicturePark\API\Model;

class FieldIndexingInfo
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The field ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Field is stored for filtering.
     *
     * @var bool
     */
    protected $index;
    /**
     * Field is stored for simple search.
     *
     * @var bool
     */
    protected $simpleSearch;
    /**
     * Field is stored for sorting.
     *
     * @var bool
     */
    protected $sortable;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    protected $boost = 1;
    /**
     * Indexing information of schema's fields related to this field (if existing).
     *
     * @var mixed|null
     */
    protected $relatedSchemaIndexing;
    /**
     * The field ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The field ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Field is stored for filtering.
     *
     * @return bool
     */
    public function getIndex(): bool
    {
        return $this->index;
    }
    /**
     * Field is stored for filtering.
     *
     * @param bool $index
     *
     * @return self
     */
    public function setIndex(bool $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * Field is stored for simple search.
     *
     * @return bool
     */
    public function getSimpleSearch(): bool
    {
        return $this->simpleSearch;
    }
    /**
     * Field is stored for simple search.
     *
     * @param bool $simpleSearch
     *
     * @return self
     */
    public function setSimpleSearch(bool $simpleSearch): self
    {
        $this->initialized['simpleSearch'] = true;
        $this->simpleSearch = $simpleSearch;
        return $this;
    }
    /**
     * Field is stored for sorting.
     *
     * @return bool
     */
    public function getSortable(): bool
    {
        return $this->sortable;
    }
    /**
     * Field is stored for sorting.
     *
     * @param bool $sortable
     *
     * @return self
     */
    public function setSortable(bool $sortable): self
    {
        $this->initialized['sortable'] = true;
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @return float
     */
    public function getBoost(): float
    {
        return $this->boost;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @param float $boost
     *
     * @return self
     */
    public function setBoost(float $boost): self
    {
        $this->initialized['boost'] = true;
        $this->boost = $boost;
        return $this;
    }
    /**
     * Indexing information of schema's fields related to this field (if existing).
     *
     * @return mixed
     */
    public function getRelatedSchemaIndexing()
    {
        return $this->relatedSchemaIndexing;
    }
    /**
     * Indexing information of schema's fields related to this field (if existing).
     *
     * @param mixed $relatedSchemaIndexing
     *
     * @return self
     */
    public function setRelatedSchemaIndexing($relatedSchemaIndexing): self
    {
        $this->initialized['relatedSchemaIndexing'] = true;
        $this->relatedSchemaIndexing = $relatedSchemaIndexing;
        return $this;
    }
}