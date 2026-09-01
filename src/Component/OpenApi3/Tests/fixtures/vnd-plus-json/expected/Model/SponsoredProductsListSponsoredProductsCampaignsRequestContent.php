<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SponsoredProductsListSponsoredProductsCampaignsRequestContent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of records to include in the paginated response. Defaults to max page size for given API
     *
     * @var int
     */
    public int $maxResults;
    /**
     * token value allowing to navigate to the next response page
     *
     * @var string
     */
    public string $nextToken;
    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus
     *
     * @var bool
     */
    public bool $includeExtendedDataFields;
    public function definedProperties(): array
    {
        return ['maxResults' => 'maxResults', 'nextToken' => 'nextToken', 'includeExtendedDataFields' => 'includeExtendedDataFields'];
    }
}