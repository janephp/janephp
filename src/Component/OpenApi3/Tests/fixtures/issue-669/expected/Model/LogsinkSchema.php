<?php

namespace Jane\Generated\DigitalOcean\Model;

class LogsinkSchema extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A unique identifier for Logsink
     *
     * @var string
     */
    protected $sinkId;
    /**
     * The name of the Logsink
     *
     * @var string
     */
    protected $sinkName;
    /**
     * @var string
     */
    protected $sinkType;
    /**
     * @var RsyslogLogsink|ElasticsearchLogsink|OpensearchLogsink|DatadogLogsink
     */
    protected $config;
    /**
     * A unique identifier for Logsink
     *
     * @return string
     */
    public function getSinkId(): string
    {
        return $this->sinkId;
    }
    /**
     * A unique identifier for Logsink
     *
     * @param string $sinkId
     *
     * @return self
     */
    public function setSinkId(string $sinkId): self
    {
        $this->initialized['sinkId'] = true;
        $this->sinkId = $sinkId;
        return $this;
    }
    /**
     * The name of the Logsink
     *
     * @return string
     */
    public function getSinkName(): string
    {
        return $this->sinkName;
    }
    /**
     * The name of the Logsink
     *
     * @param string $sinkName
     *
     * @return self
     */
    public function setSinkName(string $sinkName): self
    {
        $this->initialized['sinkName'] = true;
        $this->sinkName = $sinkName;
        return $this;
    }
    /**
     * @return string
     */
    public function getSinkType(): string
    {
        return $this->sinkType;
    }
    /**
     * @param string $sinkType
     *
     * @return self
     */
    public function setSinkType(string $sinkType): self
    {
        $this->initialized['sinkType'] = true;
        $this->sinkType = $sinkType;
        return $this;
    }
    /**
     * @return RsyslogLogsink|ElasticsearchLogsink|OpensearchLogsink|DatadogLogsink
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param RsyslogLogsink|ElasticsearchLogsink|OpensearchLogsink|DatadogLogsink $config
     *
     * @return self
     */
    public function setConfig($config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
}