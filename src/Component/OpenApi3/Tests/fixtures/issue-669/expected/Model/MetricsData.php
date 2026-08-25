<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetricsData implements AdditionalPropertiesInterface
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
     * Result of query.
     *
     * @var list<MetricsResult>
     */
    protected $result;
    /**
     * @var string
     */
    protected $resultType;
    /**
     * Result of query.
     *
     * @return list<MetricsResult>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * Result of query.
     *
     * @param list<MetricsResult> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
    /**
     * @return string
     */
    public function getResultType(): string
    {
        return $this->resultType;
    }
    /**
     * @param string $resultType
     *
     * @return self
     */
    public function setResultType(string $resultType): self
    {
        $this->initialized['resultType'] = true;
        $this->resultType = $resultType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['result' => ['result', 'getResult', 'setResult'], 'resultType' => ['resultType', 'getResultType', 'setResultType']];
    }
}