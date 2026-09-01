<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $currency;
    /**
     * @var string
     */
    public string $value;
    public function definedProperties(): array
    {
        return ['currency' => 'currency', 'value' => 'value'];
    }
}