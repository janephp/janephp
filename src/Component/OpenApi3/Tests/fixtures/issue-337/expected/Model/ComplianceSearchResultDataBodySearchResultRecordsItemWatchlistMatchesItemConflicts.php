<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $addressConflict;
    /**
     * @var bool
     */
    public bool $citizenshipConflict;
    /**
     * @var bool
     */
    public bool $countryConflict;
    /**
     * @var bool
     */
    public bool $dobConflict;
    /**
     * @var bool
     */
    public bool $entityTypeConflict;
    /**
     * @var bool
     */
    public bool $genderConflict;
    /**
     * @var bool
     */
    public bool $idConflict;
    /**
     * @var bool
     */
    public bool $phoneConflict;
    public function definedProperties(): array
    {
        return ['addressConflict' => 'addressConflict', 'citizenshipConflict' => 'citizenshipConflict', 'countryConflict' => 'countryConflict', 'dobConflict' => 'dobConflict', 'entityTypeConflict' => 'entityTypeConflict', 'genderConflict' => 'genderConflict', 'idConflict' => 'idConflict', 'phoneConflict' => 'phoneConflict'];
    }
}