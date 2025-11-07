<?php

namespace Jane\Generated\DigitalOcean\Model;

class LogsinkUpdate extends \ArrayObject
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
     * @var RsyslogLogsink|ElasticsearchLogsink|OpensearchLogsink|DatadogLogsink
     */
    protected $config;
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