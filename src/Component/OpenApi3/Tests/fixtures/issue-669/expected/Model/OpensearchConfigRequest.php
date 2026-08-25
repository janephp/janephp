<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchConfigRequest implements AdditionalPropertiesInterface
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
     * Credentials for an OpenSearch cluster user. Optional if `cluster_uuid` is passed.
     *
     * @var OpensearchConfigRequestCredentials
     */
    protected $credentials;
    /**
     * host of the OpenSearch cluster
     *
     * @var string
     */
    protected $endpoint;
    /**
     * A unique identifier for a managed OpenSearch cluster.
     *
     * @var string
     */
    protected $clusterUuid;
    /**
     * Name of a managed OpenSearch cluster.
     *
     * @var string
     */
    protected $clusterName;
    /**
     * OpenSearch index to send logs to.
     *
     * @var string
     */
    protected $indexName;
    /**
     * Number of days to retain logs in an OpenSearch cluster.
     *
     * @var int
     */
    protected $retentionDays = 14;
    /**
     * Credentials for an OpenSearch cluster user. Optional if `cluster_uuid` is passed.
     *
     * @return OpensearchConfigRequestCredentials
     */
    public function getCredentials(): OpensearchConfigRequestCredentials
    {
        return $this->credentials;
    }
    /**
     * Credentials for an OpenSearch cluster user. Optional if `cluster_uuid` is passed.
     *
     * @param OpensearchConfigRequestCredentials $credentials
     *
     * @return self
     */
    public function setCredentials(OpensearchConfigRequestCredentials $credentials): self
    {
        $this->initialized['credentials'] = true;
        $this->credentials = $credentials;
        return $this;
    }
    /**
     * host of the OpenSearch cluster
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    /**
     * host of the OpenSearch cluster
     *
     * @param string $endpoint
     *
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * A unique identifier for a managed OpenSearch cluster.
     *
     * @return string
     */
    public function getClusterUuid(): string
    {
        return $this->clusterUuid;
    }
    /**
     * A unique identifier for a managed OpenSearch cluster.
     *
     * @param string $clusterUuid
     *
     * @return self
     */
    public function setClusterUuid(string $clusterUuid): self
    {
        $this->initialized['clusterUuid'] = true;
        $this->clusterUuid = $clusterUuid;
        return $this;
    }
    /**
     * Name of a managed OpenSearch cluster.
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
     * Name of a managed OpenSearch cluster.
     *
     * @param string $clusterName
     *
     * @return self
     */
    public function setClusterName(string $clusterName): self
    {
        $this->initialized['clusterName'] = true;
        $this->clusterName = $clusterName;
        return $this;
    }
    /**
     * OpenSearch index to send logs to.
     *
     * @return string
     */
    public function getIndexName(): string
    {
        return $this->indexName;
    }
    /**
     * OpenSearch index to send logs to.
     *
     * @param string $indexName
     *
     * @return self
     */
    public function setIndexName(string $indexName): self
    {
        $this->initialized['indexName'] = true;
        $this->indexName = $indexName;
        return $this;
    }
    /**
     * Number of days to retain logs in an OpenSearch cluster.
     *
     * @return int
     */
    public function getRetentionDays(): int
    {
        return $this->retentionDays;
    }
    /**
     * Number of days to retain logs in an OpenSearch cluster.
     *
     * @param int $retentionDays
     *
     * @return self
     */
    public function setRetentionDays(int $retentionDays): self
    {
        $this->initialized['retentionDays'] = true;
        $this->retentionDays = $retentionDays;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['credentials' => ['credentials', 'getCredentials', 'setCredentials'], 'endpoint' => ['endpoint', 'getEndpoint', 'setEndpoint'], 'clusterUuid' => ['cluster_uuid', 'getClusterUuid', 'setClusterUuid'], 'clusterName' => ['cluster_name', 'getClusterName', 'setClusterName'], 'indexName' => ['index_name', 'getIndexName', 'setIndexName'], 'retentionDays' => ['retention_days', 'getRetentionDays', 'setRetentionDays']];
    }
}