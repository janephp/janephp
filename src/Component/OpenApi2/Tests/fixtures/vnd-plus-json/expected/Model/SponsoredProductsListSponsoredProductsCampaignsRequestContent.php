<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class SponsoredProductsListSponsoredProductsCampaignsRequestContent extends \ArrayObject
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
     * Number of records to include in the paginated response. Defaults to max page size for given API
     *
     * @var int
     */
    protected $maxResults;
    /**
     * token value allowing to navigate to the next response page
     *
     * @var string
     */
    protected $nextToken;
    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus
     *
     * @var bool
     */
    protected $includeExtendedDataFields;
    /**
     * Number of records to include in the paginated response. Defaults to max page size for given API
     *
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }
    /**
     * Number of records to include in the paginated response. Defaults to max page size for given API
     *
     * @param int $maxResults
     *
     * @return self
     */
    public function setMaxResults(int $maxResults): self
    {
        $this->initialized['maxResults'] = true;
        $this->maxResults = $maxResults;
        return $this;
    }
    /**
     * token value allowing to navigate to the next response page
     *
     * @return string
     */
    public function getNextToken(): string
    {
        return $this->nextToken;
    }
    /**
     * token value allowing to navigate to the next response page
     *
     * @param string $nextToken
     *
     * @return self
     */
    public function setNextToken(string $nextToken): self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;
        return $this;
    }
    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus
     *
     * @return bool
     */
    public function getIncludeExtendedDataFields(): bool
    {
        return $this->includeExtendedDataFields;
    }
    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus
     *
     * @param bool $includeExtendedDataFields
     *
     * @return self
     */
    public function setIncludeExtendedDataFields(bool $includeExtendedDataFields): self
    {
        $this->initialized['includeExtendedDataFields'] = true;
        $this->includeExtendedDataFields = $includeExtendedDataFields;
        return $this;
    }
}