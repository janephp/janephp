<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationOpenSearchSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * OpenSearch API Endpoint. Only HTTPS is supported. Format: https://<host>:<port>.
     * Cannot be specified if `cluster_name` is also specified.
     *
     * @var string
     */
    public string $endpoint;
    /**
     * Configure Username and/or Password for Basic authentication.
     *
     * @var AppLogDestinationOpenSearchSpecBasicAuth
     */
    public AppLogDestinationOpenSearchSpecBasicAuth $basicAuth;
    /**
     * The index name to use for the logs. If not set, the default index name is "logs".
     *
     * @var string
     */
    public string $indexName = 'logs';
    /**
     * The name of a DigitalOcean DBaaS OpenSearch cluster to use as a log forwarding destination.
     * Cannot be specified if `endpoint` is also specified.
     *
     * @var string
     */
    public string $clusterName;
    public function definedProperties(): array
    {
        return ['endpoint' => 'endpoint', 'basicAuth' => 'basic_auth', 'indexName' => 'index_name', 'clusterName' => 'cluster_name'];
    }
}