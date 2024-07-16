<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class SponsoredProductsListSponsoredProductsCampaignsResponseContent extends \ArrayObject
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
     * The total number of entities
     *
     * @var int
     */
    protected $totalResults;
    /**
     * 
     *
     * @var list<string>
     */
    protected $campaigns;
    /**
     * The total number of entities
     *
     * @return int
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }
    /**
     * The total number of entities
     *
     * @param int $totalResults
     *
     * @return self
     */
    public function setTotalResults(int $totalResults): self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }
    /**
     * 
     *
     * @param list<string> $campaigns
     *
     * @return self
     */
    public function setCampaigns(array $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;
        return $this;
    }
}