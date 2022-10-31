<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataCdnPurge extends BusinessProcessDetailsDataBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Serialized CDN configuration.
     *
     * @var string
     */
    protected $serializedCdnConfiguration;
    /**
     * Jobs that were processed in the operation.
     *
     * @var CdnPurgeJobBase[]
     */
    protected $jobs;
    /**
     * Serialized CDN configuration.
     *
     * @return string
     */
    public function getSerializedCdnConfiguration() : string
    {
        return $this->serializedCdnConfiguration;
    }
    /**
     * Serialized CDN configuration.
     *
     * @param string $serializedCdnConfiguration
     *
     * @return self
     */
    public function setSerializedCdnConfiguration(string $serializedCdnConfiguration) : self
    {
        $this->initialized['serializedCdnConfiguration'] = true;
        $this->serializedCdnConfiguration = $serializedCdnConfiguration;
        return $this;
    }
    /**
     * Jobs that were processed in the operation.
     *
     * @return CdnPurgeJobBase[]
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * Jobs that were processed in the operation.
     *
     * @param CdnPurgeJobBase[] $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs) : self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;
        return $this;
    }
}