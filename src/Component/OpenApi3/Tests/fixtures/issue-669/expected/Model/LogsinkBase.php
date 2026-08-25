<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LogsinkBase implements AdditionalPropertiesInterface
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
     * The name of the Logsink
     *
     * @var string
     */
    protected $sinkName;
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
    protected $sinkType;
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
     * Type of logsink integration.
     * 
     * - Use `datadog` for Datadog integration **only with MongoDB clusters**.
     * - For non-MongoDB clusters, use `rsyslog` for general syslog forwarding.
     * - Other supported types include `elasticsearch` and `opensearch`.
     * 
     * More details about the configuration can be found in the `config` property.
     * 
     *
     * @return string
     */
    public function getSinkType(): string
    {
        return $this->sinkType;
    }
    /**
    * Type of logsink integration.
    
    - Use `datadog` for Datadog integration **only with MongoDB clusters**.
    - For non-MongoDB clusters, use `rsyslog` for general syslog forwarding.
    - Other supported types include `elasticsearch` and `opensearch`.
    
    More details about the configuration can be found in the `config` property.
    
    *
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
    public function definedProperties(): array
    {
        return ['sinkName' => ['sink_name', 'getSinkName', 'setSinkName'], 'sinkType' => ['sink_type', 'getSinkType', 'setSinkType']];
    }
}