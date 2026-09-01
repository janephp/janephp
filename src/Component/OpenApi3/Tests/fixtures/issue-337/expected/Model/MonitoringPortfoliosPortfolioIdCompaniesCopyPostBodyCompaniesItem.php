<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Company Safe Number or Connect ID. Not required when copyAll query parameter is set to true.
     *
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}