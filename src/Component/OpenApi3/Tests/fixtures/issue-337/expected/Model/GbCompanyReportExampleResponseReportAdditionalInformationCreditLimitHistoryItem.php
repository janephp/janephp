<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $date;
    /**
     * @var GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
     */
    protected $companyValue;
    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * @return GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
     */
    public function getCompanyValue(): GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
    {
        return $this->companyValue;
    }
    /**
     * @param GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue $companyValue
     *
     * @return self
     */
    public function setCompanyValue(GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue $companyValue): self
    {
        $this->initialized['companyValue'] = true;
        $this->companyValue = $companyValue;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['date' => ['date', 'getDate', 'setDate'], 'companyValue' => ['companyValue', 'getCompanyValue', 'setCompanyValue']];
    }
}