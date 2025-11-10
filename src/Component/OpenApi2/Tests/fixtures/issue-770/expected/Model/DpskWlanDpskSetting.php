<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanDpskSetting
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
     * DPSK enabled
     *
     * @var bool
     */
    protected $dpskEnabled = false;
    /**
     * Length of DPSK key
     *
     * @var int
     */
    protected $length = 62;
    /**
     * Type of DPSK key
     *
     * @var string
     */
    protected $dpskType = 'Secure';
    /**
     * Expiration of DPSK key
     *
     * @var string
     */
    protected $expiration = 'Unlimited';
    /**
     * Type of expiration start from
     *
     * @var string
     */
    protected $dpskFromType = 'CreateTime';
    /**
     * DPSK enabled
     *
     * @return bool
     */
    public function getDpskEnabled(): bool
    {
        return $this->dpskEnabled;
    }
    /**
     * DPSK enabled
     *
     * @param bool $dpskEnabled
     *
     * @return self
     */
    public function setDpskEnabled(bool $dpskEnabled): self
    {
        $this->initialized['dpskEnabled'] = true;
        $this->dpskEnabled = $dpskEnabled;
        return $this;
    }
    /**
     * Length of DPSK key
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
    /**
     * Length of DPSK key
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * Type of DPSK key
     *
     * @return string
     */
    public function getDpskType(): string
    {
        return $this->dpskType;
    }
    /**
     * Type of DPSK key
     *
     * @param string $dpskType
     *
     * @return self
     */
    public function setDpskType(string $dpskType): self
    {
        $this->initialized['dpskType'] = true;
        $this->dpskType = $dpskType;
        return $this;
    }
    /**
     * Expiration of DPSK key
     *
     * @return string
     */
    public function getExpiration(): string
    {
        return $this->expiration;
    }
    /**
     * Expiration of DPSK key
     *
     * @param string $expiration
     *
     * @return self
     */
    public function setExpiration(string $expiration): self
    {
        $this->initialized['expiration'] = true;
        $this->expiration = $expiration;
        return $this;
    }
    /**
     * Type of expiration start from
     *
     * @return string
     */
    public function getDpskFromType(): string
    {
        return $this->dpskFromType;
    }
    /**
     * Type of expiration start from
     *
     * @param string $dpskFromType
     *
     * @return self
     */
    public function setDpskFromType(string $dpskFromType): self
    {
        $this->initialized['dpskFromType'] = true;
        $this->dpskFromType = $dpskFromType;
        return $this;
    }
}