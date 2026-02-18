<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CaleaCaleaCommonSettingRq
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
     * CARLEA Server IP
     *
     * @var string
     */
    protected $caleaServerIp;
    /**
     * DP IP in Data Center
     *
     * @var string
     */
    protected $dcIp;
    /**
     * CARLEA Server IP
     *
     * @return string
     */
    public function getCaleaServerIp(): string
    {
        return $this->caleaServerIp;
    }
    /**
     * CARLEA Server IP
     *
     * @param string $caleaServerIp
     *
     * @return self
     */
    public function setCaleaServerIp(string $caleaServerIp): self
    {
        $this->initialized['caleaServerIp'] = true;
        $this->caleaServerIp = $caleaServerIp;
        return $this;
    }
    /**
     * DP IP in Data Center
     *
     * @return string
     */
    public function getDcIp(): string
    {
        return $this->dcIp;
    }
    /**
     * DP IP in Data Center
     *
     * @param string $dcIp
     *
     * @return self
     */
    public function setDcIp(string $dcIp): self
    {
        $this->initialized['dcIp'] = true;
        $this->dcIp = $dcIp;
        return $this;
    }
}