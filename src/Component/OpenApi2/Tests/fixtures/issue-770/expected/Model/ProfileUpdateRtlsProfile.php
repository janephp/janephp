<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileUpdateRtlsProfile
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
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $ekahauEnabled;
    /**
     * @var string
     */
    protected $ekahauIp;
    /**
     * @var int
     */
    protected $ekahauPort;
    /**
     * @var bool
     */
    protected $stanleyEnabled;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return bool
     */
    public function getEkahauEnabled(): bool
    {
        return $this->ekahauEnabled;
    }
    /**
     * @param bool $ekahauEnabled
     *
     * @return self
     */
    public function setEkahauEnabled(bool $ekahauEnabled): self
    {
        $this->initialized['ekahauEnabled'] = true;
        $this->ekahauEnabled = $ekahauEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getEkahauIp(): string
    {
        return $this->ekahauIp;
    }
    /**
     * @param string $ekahauIp
     *
     * @return self
     */
    public function setEkahauIp(string $ekahauIp): self
    {
        $this->initialized['ekahauIp'] = true;
        $this->ekahauIp = $ekahauIp;
        return $this;
    }
    /**
     * @return int
     */
    public function getEkahauPort(): int
    {
        return $this->ekahauPort;
    }
    /**
     * @param int $ekahauPort
     *
     * @return self
     */
    public function setEkahauPort(int $ekahauPort): self
    {
        $this->initialized['ekahauPort'] = true;
        $this->ekahauPort = $ekahauPort;
        return $this;
    }
    /**
     * @return bool
     */
    public function getStanleyEnabled(): bool
    {
        return $this->stanleyEnabled;
    }
    /**
     * @param bool $stanleyEnabled
     *
     * @return self
     */
    public function setStanleyEnabled(bool $stanleyEnabled): self
    {
        $this->initialized['stanleyEnabled'] = true;
        $this->stanleyEnabled = $stanleyEnabled;
        return $this;
    }
}