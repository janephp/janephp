<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchConfigRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Credentials for an OpenSearch cluster user. Optional if `cluster_uuid` is passed.
     *
     * @var OpensearchConfigRequestCredentials
     */
    public OpensearchConfigRequestCredentials $credentials;
    /**
     * host of the OpenSearch cluster
     *
     * @var string
     */
    public string $endpoint;
    /**
     * A unique identifier for a managed OpenSearch cluster.
     *
     * @var string
     */
    public string $clusterUuid;
    /**
     * Name of a managed OpenSearch cluster.
     *
     * @var string
     */
    public string $clusterName;
    /**
     * OpenSearch index to send logs to.
     *
     * @var string
     */
    public string $indexName;
    /**
     * Number of days to retain logs in an OpenSearch cluster.
     *
     * @var int
     */
    public int $retentionDays = 14;
    public function definedProperties(): array
    {
        return ['credentials' => 'credentials', 'endpoint' => 'endpoint', 'clusterUuid' => 'cluster_uuid', 'clusterName' => 'cluster_name', 'indexName' => 'index_name', 'retentionDays' => 'retention_days'];
    }
}