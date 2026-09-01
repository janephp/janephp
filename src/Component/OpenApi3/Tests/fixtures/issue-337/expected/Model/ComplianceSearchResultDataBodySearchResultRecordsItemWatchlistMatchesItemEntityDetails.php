<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem>
     */
    public array $additionalInfo;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem>
     */
    public array $addresses;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem>
     */
    public array $akAs;
    /**
     * @var string
     */
    public string $comments;
    /**
     * @var string
     */
    public string $dateListed;
    /**
     * @var string
     */
    public string $entityType;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem>
     */
    public array $iDs;
    /**
     * @var string
     */
    public string $listReferenceNumber;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName $name;
    /**
     * @var string
     */
    public string $reasonListed;
    public function definedProperties(): array
    {
        return ['additionalInfo' => 'additionalInfo', 'addresses' => 'addresses', 'akAs' => 'akAs', 'comments' => 'comments', 'dateListed' => 'dateListed', 'entityType' => 'entityType', 'iDs' => 'iDs', 'listReferenceNumber' => 'listReferenceNumber', 'name' => 'name', 'reasonListed' => 'reasonListed'];
    }
}