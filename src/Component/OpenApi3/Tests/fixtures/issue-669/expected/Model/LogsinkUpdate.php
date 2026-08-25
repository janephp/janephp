<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LogsinkUpdate implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['config' => ['config', 'getConfig', 'setConfig']];
    }
}