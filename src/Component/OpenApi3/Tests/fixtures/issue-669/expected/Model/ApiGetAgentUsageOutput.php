<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiGetAgentUsageOutput extends \ArrayObject
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
     * Resource Usage Description
     *
     * @var ApiResourceUsage
     */
    protected $logInsightsUsage;
    /**
     * Resource Usage Description
     *
     * @var ApiResourceUsage
     */
    protected $usage;
    /**
     * Resource Usage Description
     *
     * @return ApiResourceUsage
     */
    public function getLogInsightsUsage(): ApiResourceUsage
    {
        return $this->logInsightsUsage;
    }
    /**
     * Resource Usage Description
     *
     * @param ApiResourceUsage $logInsightsUsage
     *
     * @return self
     */
    public function setLogInsightsUsage(ApiResourceUsage $logInsightsUsage): self
    {
        $this->initialized['logInsightsUsage'] = true;
        $this->logInsightsUsage = $logInsightsUsage;
        return $this;
    }
    /**
     * Resource Usage Description
     *
     * @return ApiResourceUsage
     */
    public function getUsage(): ApiResourceUsage
    {
        return $this->usage;
    }
    /**
     * Resource Usage Description
     *
     * @param ApiResourceUsage $usage
     *
     * @return self
     */
    public function setUsage(ApiResourceUsage $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
}