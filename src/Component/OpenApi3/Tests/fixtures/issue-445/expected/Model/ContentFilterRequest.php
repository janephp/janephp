<?php

namespace PicturePark\API\Model;

class ContentFilterRequest
{
    /**
     * Limits the simple search fields to the fields available in the specified channel.
     *
     * @var string|null
     */
    public ?string $channelId;
    /**
     * Only searches the specified language values. Defaults to all metadata languages of the language configuration.
     *
     * @var list<string>|null
     */
    public ?array $searchLanguages;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * Type of search to be performed: against metadata, extracted fulltext from documents or both. Default to Metadata.
     *
     * @var string
     */
    public string $searchType;
    /**
     * The collection id.
     *
     * @var string|null
     */
    public ?string $collectionId;
    /**
     * An optional search filter. Limits the content document result set.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Limits the content document result set to that life cycle state. Defaults to ActiveOnly.
     *
     * @var string
     */
    public string $lifeCycleFilter;
    /**
     * Filter the content document result set to those that have or not have broken references
     *
     * @var string
     */
    public string $brokenDependenciesFilter;
    /**
     * Limits the content document result set to specific ContentRights the user has
     *
     * @var list<string>|null
     */
    public ?array $rightsFilter;
}