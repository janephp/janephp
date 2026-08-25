<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentLoggingConfig implements AdditionalPropertiesInterface
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
     * Galileo project identifier
     *
     * @var string
     */
    protected $galileoProjectId;
    /**
     * Name of the Galileo project
     *
     * @var string
     */
    protected $galileoProjectName;
    /**
     * Whether insights are enabled
     *
     * @var bool
     */
    protected $insightsEnabled;
    /**
     * Timestamp when insights were enabled
     *
     * @var \DateTime
     */
    protected $insightsEnabledAt;
    /**
     * Identifier for the log stream
     *
     * @var string
     */
    protected $logStreamId;
    /**
     * Name of the log stream
     *
     * @var string
     */
    protected $logStreamName;
    /**
     * Galileo project identifier
     *
     * @return string
     */
    public function getGalileoProjectId(): string
    {
        return $this->galileoProjectId;
    }
    /**
     * Galileo project identifier
     *
     * @param string $galileoProjectId
     *
     * @return self
     */
    public function setGalileoProjectId(string $galileoProjectId): self
    {
        $this->initialized['galileoProjectId'] = true;
        $this->galileoProjectId = $galileoProjectId;
        return $this;
    }
    /**
     * Name of the Galileo project
     *
     * @return string
     */
    public function getGalileoProjectName(): string
    {
        return $this->galileoProjectName;
    }
    /**
     * Name of the Galileo project
     *
     * @param string $galileoProjectName
     *
     * @return self
     */
    public function setGalileoProjectName(string $galileoProjectName): self
    {
        $this->initialized['galileoProjectName'] = true;
        $this->galileoProjectName = $galileoProjectName;
        return $this;
    }
    /**
     * Whether insights are enabled
     *
     * @return bool
     */
    public function getInsightsEnabled(): bool
    {
        return $this->insightsEnabled;
    }
    /**
     * Whether insights are enabled
     *
     * @param bool $insightsEnabled
     *
     * @return self
     */
    public function setInsightsEnabled(bool $insightsEnabled): self
    {
        $this->initialized['insightsEnabled'] = true;
        $this->insightsEnabled = $insightsEnabled;
        return $this;
    }
    /**
     * Timestamp when insights were enabled
     *
     * @return \DateTime
     */
    public function getInsightsEnabledAt(): \DateTime
    {
        return $this->insightsEnabledAt;
    }
    /**
     * Timestamp when insights were enabled
     *
     * @param \DateTime $insightsEnabledAt
     *
     * @return self
     */
    public function setInsightsEnabledAt(\DateTime $insightsEnabledAt): self
    {
        $this->initialized['insightsEnabledAt'] = true;
        $this->insightsEnabledAt = $insightsEnabledAt;
        return $this;
    }
    /**
     * Identifier for the log stream
     *
     * @return string
     */
    public function getLogStreamId(): string
    {
        return $this->logStreamId;
    }
    /**
     * Identifier for the log stream
     *
     * @param string $logStreamId
     *
     * @return self
     */
    public function setLogStreamId(string $logStreamId): self
    {
        $this->initialized['logStreamId'] = true;
        $this->logStreamId = $logStreamId;
        return $this;
    }
    /**
     * Name of the log stream
     *
     * @return string
     */
    public function getLogStreamName(): string
    {
        return $this->logStreamName;
    }
    /**
     * Name of the log stream
     *
     * @param string $logStreamName
     *
     * @return self
     */
    public function setLogStreamName(string $logStreamName): self
    {
        $this->initialized['logStreamName'] = true;
        $this->logStreamName = $logStreamName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['galileoProjectId' => ['galileo_project_id', 'getGalileoProjectId', 'setGalileoProjectId'], 'galileoProjectName' => ['galileo_project_name', 'getGalileoProjectName', 'setGalileoProjectName'], 'insightsEnabled' => ['insights_enabled', 'getInsightsEnabled', 'setInsightsEnabled'], 'insightsEnabledAt' => ['insights_enabled_at', 'getInsightsEnabledAt', 'setInsightsEnabledAt'], 'logStreamId' => ['log_stream_id', 'getLogStreamId', 'setLogStreamId'], 'logStreamName' => ['log_stream_name', 'getLogStreamName', 'setLogStreamName']];
    }
}