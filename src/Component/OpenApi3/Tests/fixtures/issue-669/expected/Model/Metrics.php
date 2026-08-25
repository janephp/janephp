<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Metrics implements AdditionalPropertiesInterface
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
     * @var MetricsData
     */
    protected $data;
    /**
     * @var string
     */
    protected $status;
    /**
     * @return MetricsData
     */
    public function getData(): MetricsData
    {
        return $this->data;
    }
    /**
     * @param MetricsData $data
     *
     * @return self
     */
    public function setData(MetricsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}