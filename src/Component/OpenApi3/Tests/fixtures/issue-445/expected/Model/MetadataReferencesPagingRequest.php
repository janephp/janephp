<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MetadataReferencesPagingRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Limits the number of the returned schemas. Defaults to 0.
     *
     * @var int
     */
    public int $limit;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    public ?string $pageToken;
    /**
     * Set to true to check if any incoming references are originating from an item the current user does not have full access to.
     *
     * @var bool
     */
    public bool $fetchReferencedByRestrictedItem;
    public function definedProperties(): array
    {
        return ['limit' => 'limit', 'pageToken' => 'pageToken', 'fetchReferencedByRestrictedItem' => 'fetchReferencedByRestrictedItem'];
    }
}