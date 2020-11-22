<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody
{
    /**
     * If set to "true", all user permissions will be revoked for the portfolio. By default set to "false".
     *
     * @var string
     */
    protected $revokeAll;
    /**
     * 
     *
     * @var MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem[]
     */
    protected $companies;
    /**
     * If set to "true", all user permissions will be revoked for the portfolio. By default set to "false".
     *
     * @return string
     */
    public function getRevokeAll() : string
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
    public function setRevokeAll(string $revokeAll) : self
    {
        $this->revokeAll = $revokeAll;
        return $this;
    }
    /**
     * 
     *
     * @return MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->companies = $companies;
        return $this;
    }
}