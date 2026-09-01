<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentLoggingConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Galileo project identifier
     *
     * @var string
     */
    public string $galileoProjectId;
    /**
     * Name of the Galileo project
     *
     * @var string
     */
    public string $galileoProjectName;
    /**
     * Whether insights are enabled
     *
     * @var bool
     */
    public bool $insightsEnabled;
    /**
     * Timestamp when insights were enabled
     *
     * @var \DateTime
     */
    public \DateTime $insightsEnabledAt;
    /**
     * Identifier for the log stream
     *
     * @var string
     */
    public string $logStreamId;
    /**
     * Name of the log stream
     *
     * @var string
     */
    public string $logStreamName;
    public function definedProperties(): array
    {
        return ['galileoProjectId' => 'galileo_project_id', 'galileoProjectName' => 'galileo_project_name', 'insightsEnabled' => 'insights_enabled', 'insightsEnabledAt' => 'insights_enabled_at', 'logStreamId' => 'log_stream_id', 'logStreamName' => 'log_stream_name'];
    }
}