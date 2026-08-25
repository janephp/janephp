<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem implements AdditionalPropertiesInterface
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
    protected $auditorName;
    /**
     * @return string
     */
    public function getAuditorName(): string
    {
        return $this->auditorName;
    }
    /**
     * @param string $auditorName
     *
     * @return self
     */
    public function setAuditorName(string $auditorName): self
    {
        $this->initialized['auditorName'] = true;
        $this->auditorName = $auditorName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['auditorName' => ['auditorName', 'getAuditorName', 'setAuditorName']];
    }
}