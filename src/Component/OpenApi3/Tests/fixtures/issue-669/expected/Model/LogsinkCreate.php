<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LogsinkCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the Logsink
     *
     * @var string
     */
    public string $sinkName;
    /**
     * Type of logsink integration.
     * 
     * - Use `datadog` for Datadog integration **only with MongoDB clusters**.
     * - For non-MongoDB clusters, use `rsyslog` for general syslog forwarding.
     * - Other supported types include `elasticsearch` and `opensearch`.
     * 
     * More details about the configuration can be found in the `config` property.
     * 
     *
     * @var string
     */
    public string $sinkType;
    /**
     * @var RsyslogLogsink|ElasticsearchLogsink|OpensearchLogsink|DatadogLogsink
     */
    public $config;
    public function definedProperties(): array
    {
        return ['sinkName' => 'sink_name', 'sinkType' => 'sink_type', 'config' => 'config'];
    }
}