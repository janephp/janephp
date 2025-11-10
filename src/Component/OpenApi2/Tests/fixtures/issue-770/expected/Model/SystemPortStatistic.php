<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemPortStatistic
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
     * rxBps
     *
     * @var float
     */
    protected $rxBps;
    /**
     * rxBpsMax
     *
     * @var float
     */
    protected $rxBpsMax;
    /**
     * rxBpsMin
     *
     * @var float
     */
    protected $rxBpsMin;
    /**
     * rxBytes
     *
     * @var float
     */
    protected $rxBytes;
    /**
     * rxDropped
     *
     * @var float
     */
    protected $rxDropped;
    /**
     * rxPackets
     *
     * @var float
     */
    protected $rxPackets;
    /**
     * txBps
     *
     * @var float
     */
    protected $txBps;
    /**
     * txBpsMax
     *
     * @var float
     */
    protected $txBpsMax;
    /**
     * txBpsMin
     *
     * @var float
     */
    protected $txBpsMin;
    /**
     * txBytes
     *
     * @var float
     */
    protected $txBytes;
    /**
     * txDropped
     *
     * @var float
     */
    protected $txDropped;
    /**
     * txPackets
     *
     * @var float
     */
    protected $txPackets;
    /**
     * rxBps
     *
     * @return float
     */
    public function getRxBps(): float
    {
        return $this->rxBps;
    }
    /**
     * rxBps
     *
     * @param float $rxBps
     *
     * @return self
     */
    public function setRxBps(float $rxBps): self
    {
        $this->initialized['rxBps'] = true;
        $this->rxBps = $rxBps;
        return $this;
    }
    /**
     * rxBpsMax
     *
     * @return float
     */
    public function getRxBpsMax(): float
    {
        return $this->rxBpsMax;
    }
    /**
     * rxBpsMax
     *
     * @param float $rxBpsMax
     *
     * @return self
     */
    public function setRxBpsMax(float $rxBpsMax): self
    {
        $this->initialized['rxBpsMax'] = true;
        $this->rxBpsMax = $rxBpsMax;
        return $this;
    }
    /**
     * rxBpsMin
     *
     * @return float
     */
    public function getRxBpsMin(): float
    {
        return $this->rxBpsMin;
    }
    /**
     * rxBpsMin
     *
     * @param float $rxBpsMin
     *
     * @return self
     */
    public function setRxBpsMin(float $rxBpsMin): self
    {
        $this->initialized['rxBpsMin'] = true;
        $this->rxBpsMin = $rxBpsMin;
        return $this;
    }
    /**
     * rxBytes
     *
     * @return float
     */
    public function getRxBytes(): float
    {
        return $this->rxBytes;
    }
    /**
     * rxBytes
     *
     * @param float $rxBytes
     *
     * @return self
     */
    public function setRxBytes(float $rxBytes): self
    {
        $this->initialized['rxBytes'] = true;
        $this->rxBytes = $rxBytes;
        return $this;
    }
    /**
     * rxDropped
     *
     * @return float
     */
    public function getRxDropped(): float
    {
        return $this->rxDropped;
    }
    /**
     * rxDropped
     *
     * @param float $rxDropped
     *
     * @return self
     */
    public function setRxDropped(float $rxDropped): self
    {
        $this->initialized['rxDropped'] = true;
        $this->rxDropped = $rxDropped;
        return $this;
    }
    /**
     * rxPackets
     *
     * @return float
     */
    public function getRxPackets(): float
    {
        return $this->rxPackets;
    }
    /**
     * rxPackets
     *
     * @param float $rxPackets
     *
     * @return self
     */
    public function setRxPackets(float $rxPackets): self
    {
        $this->initialized['rxPackets'] = true;
        $this->rxPackets = $rxPackets;
        return $this;
    }
    /**
     * txBps
     *
     * @return float
     */
    public function getTxBps(): float
    {
        return $this->txBps;
    }
    /**
     * txBps
     *
     * @param float $txBps
     *
     * @return self
     */
    public function setTxBps(float $txBps): self
    {
        $this->initialized['txBps'] = true;
        $this->txBps = $txBps;
        return $this;
    }
    /**
     * txBpsMax
     *
     * @return float
     */
    public function getTxBpsMax(): float
    {
        return $this->txBpsMax;
    }
    /**
     * txBpsMax
     *
     * @param float $txBpsMax
     *
     * @return self
     */
    public function setTxBpsMax(float $txBpsMax): self
    {
        $this->initialized['txBpsMax'] = true;
        $this->txBpsMax = $txBpsMax;
        return $this;
    }
    /**
     * txBpsMin
     *
     * @return float
     */
    public function getTxBpsMin(): float
    {
        return $this->txBpsMin;
    }
    /**
     * txBpsMin
     *
     * @param float $txBpsMin
     *
     * @return self
     */
    public function setTxBpsMin(float $txBpsMin): self
    {
        $this->initialized['txBpsMin'] = true;
        $this->txBpsMin = $txBpsMin;
        return $this;
    }
    /**
     * txBytes
     *
     * @return float
     */
    public function getTxBytes(): float
    {
        return $this->txBytes;
    }
    /**
     * txBytes
     *
     * @param float $txBytes
     *
     * @return self
     */
    public function setTxBytes(float $txBytes): self
    {
        $this->initialized['txBytes'] = true;
        $this->txBytes = $txBytes;
        return $this;
    }
    /**
     * txDropped
     *
     * @return float
     */
    public function getTxDropped(): float
    {
        return $this->txDropped;
    }
    /**
     * txDropped
     *
     * @param float $txDropped
     *
     * @return self
     */
    public function setTxDropped(float $txDropped): self
    {
        $this->initialized['txDropped'] = true;
        $this->txDropped = $txDropped;
        return $this;
    }
    /**
     * txPackets
     *
     * @return float
     */
    public function getTxPackets(): float
    {
        return $this->txPackets;
    }
    /**
     * txPackets
     *
     * @param float $txPackets
     *
     * @return self
     */
    public function setTxPackets(float $txPackets): self
    {
        $this->initialized['txPackets'] = true;
        $this->txPackets = $txPackets;
        return $this;
    }
}