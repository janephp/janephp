<?php

namespace PicturePark\API\Model;

class ListItemFilterRequest
{
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * An optional filter to limit the list items.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @var bool
     */
    public bool $includeAllSchemaChildren;
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @var list<string>|null
     */
    public ?array $schemaIds;
    /**
     * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
     * If not specified, all metadata languages defined in the system are used.
     *
     * @var list<string>|null
     */
    public ?array $searchLanguages;
    /**
     * Limits the search to the list items that have or not have broken references. By default it includes both.
     *
     * @var string
     */
    public string $brokenDependenciesFilter = 'All';
}