<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchLogsink implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Opensearch connection URL
     *
     * @var string
     */
    public string $url;
    /**
     * Opensearch index prefix
     *
     * @var string
     */
    public string $indexPrefix;
    /**
     * Maximum number of days of logs to keep
     *
     * @var int
     */
    public int $indexDaysMax = 7;
    /**
     * Opensearch request timeout limit
     *
     * @var float
     */
    public float $timeout = 10;
    /**
     * PEM encoded CA certificate
     *
     * @var string
     */
    public string $ca;
    public function definedProperties(): array
    {
        return ['url' => 'url', 'indexPrefix' => 'index_prefix', 'indexDaysMax' => 'index_days_max', 'timeout' => 'timeout', 'ca' => 'ca'];
    }
}