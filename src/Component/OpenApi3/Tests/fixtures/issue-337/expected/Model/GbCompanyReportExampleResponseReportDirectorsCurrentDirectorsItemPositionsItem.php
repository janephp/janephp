<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem implements AdditionalPropertiesInterface
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
    protected $dateAppointed;
    /**
     * @var string
     */
    protected $positionName;
    /**
     * @return string
     */
    public function getDateAppointed(): string
    {
        return $this->dateAppointed;
    }
    /**
     * @param string $dateAppointed
     *
     * @return self
     */
    public function setDateAppointed(string $dateAppointed): self
    {
        $this->initialized['dateAppointed'] = true;
        $this->dateAppointed = $dateAppointed;
        return $this;
    }
    /**
     * @return string
     */
    public function getPositionName(): string
    {
        return $this->positionName;
    }
    /**
     * @param string $positionName
     *
     * @return self
     */
    public function setPositionName(string $positionName): self
    {
        $this->initialized['positionName'] = true;
        $this->positionName = $positionName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dateAppointed' => ['dateAppointed', 'getDateAppointed', 'setDateAppointed'], 'positionName' => ['positionName', 'getPositionName', 'setPositionName']];
    }
}