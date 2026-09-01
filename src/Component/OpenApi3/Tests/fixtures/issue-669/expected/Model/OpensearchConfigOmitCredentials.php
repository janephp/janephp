<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchConfigOmitCredentials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for a configuration.
     *
     * @var string
     */
    public string $id;
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
     * Number of days to retain logs in OpenSearch.
     *
     * @var int
     */
    public int $retentionDays = 14;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'endpoint' => 'endpoint', 'clusterUuid' => 'cluster_uuid', 'clusterName' => 'cluster_name', 'indexName' => 'index_name', 'retentionDays' => 'retention_days'];
    }
}