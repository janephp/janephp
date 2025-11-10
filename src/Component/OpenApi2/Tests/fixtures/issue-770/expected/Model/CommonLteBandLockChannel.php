<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonLteBandLockChannel
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
     * SIM card ID(Primary:0, Secondary:1)
     *
     * @var int
     */
    protected $simCardId;
    /**
     * LTE chipset SKU type
     *
     * @var string
     */
    protected $type;
    /**
     * LTE 4G channels
     *
     * @var string
     */
    protected $channel4g;
    /**
     * LTE 3G channels
     *
     * @var string
     */
    protected $channel3g;
    /**
     * SIM card ID(Primary:0, Secondary:1)
     *
     * @return int
     */
    public function getSimCardId(): int
    {
        return $this->simCardId;
    }
    /**
     * SIM card ID(Primary:0, Secondary:1)
     *
     * @param int $simCardId
     *
     * @return self
     */
    public function setSimCardId(int $simCardId): self
    {
        $this->initialized['simCardId'] = true;
        $this->simCardId = $simCardId;
        return $this;
    }
    /**
     * LTE chipset SKU type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * LTE chipset SKU type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * LTE 4G channels
     *
     * @return string
     */
    public function getChannel4g(): string
    {
        return $this->channel4g;
    }
    /**
     * LTE 4G channels
     *
     * @param string $channel4g
     *
     * @return self
     */
    public function setChannel4g(string $channel4g): self
    {
        $this->initialized['channel4g'] = true;
        $this->channel4g = $channel4g;
        return $this;
    }
    /**
     * LTE 3G channels
     *
     * @return string
     */
    public function getChannel3g(): string
    {
        return $this->channel3g;
    }
    /**
     * LTE 3G channels
     *
     * @param string $channel3g
     *
     * @return self
     */
    public function setChannel3g(string $channel3g): self
    {
        $this->initialized['channel3g'] = true;
        $this->channel3g = $channel3g;
        return $this;
    }
}