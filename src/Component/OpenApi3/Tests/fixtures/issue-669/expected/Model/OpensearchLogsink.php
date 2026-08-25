<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchLogsink implements AdditionalPropertiesInterface
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
     * Opensearch connection URL
     *
     * @var string
     */
    protected $url;
    /**
     * Opensearch index prefix
     *
     * @var string
     */
    protected $indexPrefix;
    /**
     * Maximum number of days of logs to keep
     *
     * @var int
     */
    protected $indexDaysMax = 7;
    /**
     * Opensearch request timeout limit
     *
     * @var float
     */
    protected $timeout = 10;
    /**
     * PEM encoded CA certificate
     *
     * @var string
     */
    protected $ca;
    /**
     * Opensearch connection URL
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Opensearch connection URL
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Opensearch index prefix
     *
     * @return string
     */
    public function getIndexPrefix(): string
    {
        return $this->indexPrefix;
    }
    /**
     * Opensearch index prefix
     *
     * @param string $indexPrefix
     *
     * @return self
     */
    public function setIndexPrefix(string $indexPrefix): self
    {
        $this->initialized['indexPrefix'] = true;
        $this->indexPrefix = $indexPrefix;
        return $this;
    }
    /**
     * Maximum number of days of logs to keep
     *
     * @return int
     */
    public function getIndexDaysMax(): int
    {
        return $this->indexDaysMax;
    }
    /**
     * Maximum number of days of logs to keep
     *
     * @param int $indexDaysMax
     *
     * @return self
     */
    public function setIndexDaysMax(int $indexDaysMax): self
    {
        $this->initialized['indexDaysMax'] = true;
        $this->indexDaysMax = $indexDaysMax;
        return $this;
    }
    /**
     * Opensearch request timeout limit
     *
     * @return float
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }
    /**
     * Opensearch request timeout limit
     *
     * @param float $timeout
     *
     * @return self
     */
    public function setTimeout(float $timeout): self
    {
        $this->initialized['timeout'] = true;
        $this->timeout = $timeout;
        return $this;
    }
    /**
     * PEM encoded CA certificate
     *
     * @return string
     */
    public function getCa(): string
    {
        return $this->ca;
    }
    /**
     * PEM encoded CA certificate
     *
     * @param string $ca
     *
     * @return self
     */
    public function setCa(string $ca): self
    {
        $this->initialized['ca'] = true;
        $this->ca = $ca;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['url' => ['url', 'getUrl', 'setUrl'], 'indexPrefix' => ['index_prefix', 'getIndexPrefix', 'setIndexPrefix'], 'indexDaysMax' => ['index_days_max', 'getIndexDaysMax', 'setIndexDaysMax'], 'timeout' => ['timeout', 'getTimeout', 'setTimeout'], 'ca' => ['ca', 'getCa', 'setCa']];
    }
}