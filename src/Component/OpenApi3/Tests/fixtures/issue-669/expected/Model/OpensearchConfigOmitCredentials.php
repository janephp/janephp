<?php

namespace Jane\Generated\DigitalOcean\Model;

class OpensearchConfigOmitCredentials extends \ArrayObject
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
     * A unique identifier for a configuration.
     *
     * @var string
     */
    protected $id;
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
     * Number of days to retain logs in OpenSearch.
     *
     * @var int
     */
    protected $retentionDays = 14;
    /**
     * A unique identifier for a configuration.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique identifier for a configuration.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     * Number of days to retain logs in OpenSearch.
     *
     * @return int
     */
    public function getRetentionDays(): int
    {
        return $this->retentionDays;
    }
    /**
     * Number of days to retain logs in OpenSearch.
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
}