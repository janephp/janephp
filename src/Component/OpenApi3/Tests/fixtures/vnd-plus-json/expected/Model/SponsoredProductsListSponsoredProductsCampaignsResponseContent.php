<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SponsoredProductsListSponsoredProductsCampaignsResponseContent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The total number of entities
     *
     * @var int
     */
    public int $totalResults;
    /**
     * @var list<string>
     */
    public array $campaigns;
    public function definedProperties(): array
    {
        return ['totalResults' => 'totalResults', 'campaigns' => 'campaigns'];
    }
}