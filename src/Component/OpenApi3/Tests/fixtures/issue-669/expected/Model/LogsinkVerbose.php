<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LogsinkVerbose implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for Logsink
     *
     * @var string
     */
    public string $sinkId;
    /**
     * The name of the Logsink
     *
     * @var string
     */
    public string $sinkName;
    /**
     * @var string
     */
    public string $sinkType;
    /**
     * @var RsyslogLogsink|ElasticsearchLogsink|OpensearchLogsink|DatadogLogsink
     */
    public $config;
    public function definedProperties(): array
    {
        return ['sinkId' => 'sink_id', 'sinkName' => 'sink_name', 'sinkType' => 'sink_type', 'config' => 'config'];
    }
}