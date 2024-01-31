<?php

namespace Github\Model;

class RateLimitOverviewResources extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var RateLimit
     */
    protected $core;
    /**
     * 
     *
     * @var RateLimit
     */
    protected $graphql;
    /**
     * 
     *
     * @var RateLimit
     */
    protected $search;
    /**
     * 
     *
     * @var RateLimit
     */
    protected $sourceImport;
    /**
     * 
     *
     * @var RateLimit
     */
    protected $integrationManifest;
    /**
     * 
     *
     * @return RateLimit
     */
    public function getCore() : RateLimit
    {
        return $this->core;
    }
    /**
     * 
     *
     * @param RateLimit $core
     *
     * @return self
     */
    public function setCore(RateLimit $core) : self
    {
        $this->initialized['core'] = true;
        $this->core = $core;
        return $this;
    }
    /**
     * 
     *
     * @return RateLimit
     */
    public function getGraphql() : RateLimit
    {
        return $this->graphql;
    }
    /**
     * 
     *
     * @param RateLimit $graphql
     *
     * @return self
     */
    public function setGraphql(RateLimit $graphql) : self
    {
        $this->initialized['graphql'] = true;
        $this->graphql = $graphql;
        return $this;
    }
    /**
     * 
     *
     * @return RateLimit
     */
    public function getSearch() : RateLimit
    {
        return $this->search;
    }
    /**
     * 
     *
     * @param RateLimit $search
     *
     * @return self
     */
    public function setSearch(RateLimit $search) : self
    {
        $this->initialized['search'] = true;
        $this->search = $search;
        return $this;
    }
    /**
     * 
     *
     * @return RateLimit
     */
    public function getSourceImport() : RateLimit
    {
        return $this->sourceImport;
    }
    /**
     * 
     *
     * @param RateLimit $sourceImport
     *
     * @return self
     */
    public function setSourceImport(RateLimit $sourceImport) : self
    {
        $this->initialized['sourceImport'] = true;
        $this->sourceImport = $sourceImport;
        return $this;
    }
    /**
     * 
     *
     * @return RateLimit
     */
    public function getIntegrationManifest() : RateLimit
    {
        return $this->integrationManifest;
    }
    /**
     * 
     *
     * @param RateLimit $integrationManifest
     *
     * @return self
     */
    public function setIntegrationManifest(RateLimit $integrationManifest) : self
    {
        $this->initialized['integrationManifest'] = true;
        $this->integrationManifest = $integrationManifest;
        return $this;
    }
}