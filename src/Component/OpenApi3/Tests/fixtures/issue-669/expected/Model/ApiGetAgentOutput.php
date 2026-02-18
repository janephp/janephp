<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiGetAgentOutput extends \ArrayObject
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
     * An Agent
     *
     * @var ApiAgent
     */
    protected $agent;
    /**
     * An Agent
     *
     * @return ApiAgent
     */
    public function getAgent(): ApiAgent
    {
        return $this->agent;
    }
    /**
     * An Agent
     *
     * @param ApiAgent $agent
     *
     * @return self
     */
    public function setAgent(ApiAgent $agent): self
    {
        $this->initialized['agent'] = true;
        $this->agent = $agent;
        return $this;
    }
}