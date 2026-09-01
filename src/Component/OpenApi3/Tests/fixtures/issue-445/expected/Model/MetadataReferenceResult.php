<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataReferenceResult implements AdditionalPropertiesInterface
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
     * @var list<MetadataReference>
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
     * Indicates if any reference is originating from an item that the current user does not have access to.
     *
     * @var bool|null
     */
    public ?bool $isReferencedByRestrictedItem;
    public function definedProperties(): array
    {
        return ['totalResults' => 'totalResults', 'results' => 'results', 'elapsedMilliseconds' => 'elapsedMilliseconds', 'pageToken' => 'pageToken', 'isReferencedByRestrictedItem' => 'isReferencedByRestrictedItem'];
    }
}