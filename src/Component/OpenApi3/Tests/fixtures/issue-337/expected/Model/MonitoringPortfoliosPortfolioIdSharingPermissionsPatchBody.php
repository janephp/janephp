<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * If set to "true", all user permissions will be revoked for the portfolio. By default set to "false".
     *
     * @var string
     */
    public string $revokeAll;
    /**
     * @var list<MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem>
     */
    public array $companies;
    public function definedProperties(): array
    {
        return ['revokeAll' => 'revokeAll', 'companies' => 'companies'];
    }
}