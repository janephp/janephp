<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements implements AdditionalPropertiesInterface
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
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
     */
    protected $registered;
    /**
     * @return GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
     */
    public function getRegistered(): GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
    {
        return $this->registered;
    }
    /**
     * @param GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered $registered
     *
     * @return self
     */
    public function setRegistered(GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered $registered): self
    {
        $this->initialized['registered'] = true;
        $this->registered = $registered;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['registered' => ['registered', 'getRegistered', 'setRegistered']];
    }
}