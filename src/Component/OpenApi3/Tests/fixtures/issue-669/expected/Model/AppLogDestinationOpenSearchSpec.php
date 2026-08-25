<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationOpenSearchSpec implements AdditionalPropertiesInterface
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
     * OpenSearch API Endpoint. Only HTTPS is supported. Format: https://<host>:<port>.
     * Cannot be specified if `cluster_name` is also specified.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * Configure Username and/or Password for Basic authentication.
     *
     * @var AppLogDestinationOpenSearchSpecBasicAuth
     */
    protected $basicAuth;
    /**
     * The index name to use for the logs. If not set, the default index name is "logs".
     *
     * @var string
     */
    protected $indexName = 'logs';
    /**
     * The name of a DigitalOcean DBaaS OpenSearch cluster to use as a log forwarding destination.
     * Cannot be specified if `endpoint` is also specified.
     *
     * @var string
     */
    protected $clusterName;
    /**
     * OpenSearch API Endpoint. Only HTTPS is supported. Format: https://<host>:<port>.
     * Cannot be specified if `cluster_name` is also specified.
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    /**
    * OpenSearch API Endpoint. Only HTTPS is supported. Format: https://<host>:<port>.
    Cannot be specified if `cluster_name` is also specified.
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
     * Configure Username and/or Password for Basic authentication.
     *
     * @return AppLogDestinationOpenSearchSpecBasicAuth
     */
    public function getBasicAuth(): AppLogDestinationOpenSearchSpecBasicAuth
    {
        return $this->basicAuth;
    }
    /**
     * Configure Username and/or Password for Basic authentication.
     *
     * @param AppLogDestinationOpenSearchSpecBasicAuth $basicAuth
     *
     * @return self
     */
    public function setBasicAuth(AppLogDestinationOpenSearchSpecBasicAuth $basicAuth): self
    {
        $this->initialized['basicAuth'] = true;
        $this->basicAuth = $basicAuth;
        return $this;
    }
    /**
     * The index name to use for the logs. If not set, the default index name is "logs".
     *
     * @return string
     */
    public function getIndexName(): string
    {
        return $this->indexName;
    }
    /**
     * The index name to use for the logs. If not set, the default index name is "logs".
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
     * The name of a DigitalOcean DBaaS OpenSearch cluster to use as a log forwarding destination.
     * Cannot be specified if `endpoint` is also specified.
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
    * The name of a DigitalOcean DBaaS OpenSearch cluster to use as a log forwarding destination.
    Cannot be specified if `endpoint` is also specified.
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
    public function definedProperties(): array
    {
        return ['endpoint' => ['endpoint', 'getEndpoint', 'setEndpoint'], 'basicAuth' => ['basic_auth', 'getBasicAuth', 'setBasicAuth'], 'indexName' => ['index_name', 'getIndexName', 'setIndexName'], 'clusterName' => ['cluster_name', 'getClusterName', 'setClusterName']];
    }
}