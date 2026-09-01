<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SearchBehaviorBaseResultOfListItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The total number of matching documents.
     *
     * @var int
     */
    public int $totalResults;
    /**
     * The matched documents.
     *
     * @var list<ListItem>
     */
    public array $results;
    /**
     * The search execution time in milliseconds.
     *
     * @var int
     */
    public int $elapsedMilliseconds;
    /**
     * An optional token to access the next page of results for those endpoints that support backend scrolling logic.
     *
     * @var string|null
     */
    public ?string $pageToken;
    /**
     * The search string used to query the data.
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * Flag to notify if the SearchString was modified compared to the original requested one.
     *
     * @var bool
     */
    public bool $isSearchStringRewritten;
    /**
     * Additional information regarding the query execution and reason of the matched documents. Multiple items are returned if multiple queries were performed.
     *
     * @var list<QueryDebugInformation>|null
     */
    public ?array $queryDebugInformation;
    public function definedProperties(): array
    {
        return ['totalResults' => 'totalResults', 'results' => 'results', 'elapsedMilliseconds' => 'elapsedMilliseconds', 'pageToken' => 'pageToken', 'searchString' => 'searchString', 'isSearchStringRewritten' => 'isSearchStringRewritten', 'queryDebugInformation' => 'queryDebugInformation'];
    }
}