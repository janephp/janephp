<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * If set to "true", all user permissions will be revoked for the portfolio. By default set to "false".
     *
     * @var string
     */
    protected $revokeAll;
    /**
     * @var list<MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem>
     */
    protected $companies;
    /**
     * If set to "true", all user permissions will be revoked for the portfolio. By default set to "false".
     *
     * @return string
     */
    public function getRevokeAll(): string
    {
        return $this->revokeAll;
    }
    /**
     * If set to "true", all user permissions will be revoked for the portfolio. By default set to "false".
     *
     * @param string $revokeAll
     *
     * @return self
     */
    public function setRevokeAll(string $revokeAll): self
    {
        $this->initialized['revokeAll'] = true;
        $this->revokeAll = $revokeAll;
        return $this;
    }
    /**
     * @return list<MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem>
     */
    public function getCompanies(): array
    {
        return $this->companies;
    }
    /**
     * @param list<MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem> $companies
     *
     * @return self
     */
    public function setCompanies(array $companies): self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['revokeAll' => ['revokeAll', 'getRevokeAll', 'setRevokeAll'], 'companies' => ['companies', 'getCompanies', 'setCompanies']];
    }
}