<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanySummaryMainActivity implements AdditionalPropertiesInterface
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
    protected $code;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $classification;
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getClassification(): string
    {
        return $this->classification;
    }
    /**
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['code' => ['code', 'getCode', 'setCode'], 'description' => ['description', 'getDescription', 'setDescription'], 'classification' => ['classification', 'getClassification', 'setClassification']];
    }
}