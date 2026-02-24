<?php

namespace PicturePark\API\Model;

class TermsRelationAggregator extends AggregatorBase
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
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @var string
     */
    protected $field;
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @var int|null
     */
    protected $size;
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @var list<string>|null
     */
    protected $includes;
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @var list<string>|null
     */
    protected $excludes;
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @var list<string>|null
     */
    protected $searchFields;
    /**
     * Type of the item target of the relation. It is used to resolve the target ID.
     *
     * @var mixed
     */
    protected $documentType;
    /**
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @return list<string>|null
     */
    public function getIncludes(): ?array
    {
        return $this->includes;
    }
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @param list<string>|null $includes
     *
     * @return self
     */
    public function setIncludes(?array $includes): self
    {
        $this->initialized['includes'] = true;
        $this->includes = $includes;
        return $this;
    }
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @return list<string>|null
     */
    public function getExcludes(): ?array
    {
        return $this->excludes;
    }
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @param list<string>|null $excludes
     *
     * @return self
     */
    public function setExcludes(?array $excludes): self
    {
        $this->initialized['excludes'] = true;
        $this->excludes = $excludes;
        return $this;
    }
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString(): ?string
    {
        return $this->searchString;
    }
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @param string|null $searchString
     *
     * @return self
     */
    public function setSearchString(?string $searchString): self
    {
        $this->initialized['searchString'] = true;
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @return list<string>|null
     */
    public function getSearchFields(): ?array
    {
        return $this->searchFields;
    }
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @param list<string>|null $searchFields
     *
     * @return self
     */
    public function setSearchFields(?array $searchFields): self
    {
        $this->initialized['searchFields'] = true;
        $this->searchFields = $searchFields;
        return $this;
    }
    /**
     * Type of the item target of the relation. It is used to resolve the target ID.
     *
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
    /**
     * Type of the item target of the relation. It is used to resolve the target ID.
     *
     * @param mixed $documentType
     *
     * @return self
     */
    public function setDocumentType($documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
}