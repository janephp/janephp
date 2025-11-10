<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SyslogPriority
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
     * Event severity
     *
     * @var string
     */
    protected $critical;
    /**
     * Event severity
     *
     * @var string
     */
    protected $major;
    /**
     * Event severity
     *
     * @var string
     */
    protected $minor;
    /**
     * Event severity
     *
     * @var string
     */
    protected $warning;
    /**
     * Event severity
     *
     * @var string
     */
    protected $informational;
    /**
     * Event severity
     *
     * @var string
     */
    protected $debug;
    /**
     * Event severity
     *
     * @return string
     */
    public function getCritical(): string
    {
        return $this->critical;
    }
    /**
     * Event severity
     *
     * @param string $critical
     *
     * @return self
     */
    public function setCritical(string $critical): self
    {
        $this->initialized['critical'] = true;
        $this->critical = $critical;
        return $this;
    }
    /**
     * Event severity
     *
     * @return string
     */
    public function getMajor(): string
    {
        return $this->major;
    }
    /**
     * Event severity
     *
     * @param string $major
     *
     * @return self
     */
    public function setMajor(string $major): self
    {
        $this->initialized['major'] = true;
        $this->major = $major;
        return $this;
    }
    /**
     * Event severity
     *
     * @return string
     */
    public function getMinor(): string
    {
        return $this->minor;
    }
    /**
     * Event severity
     *
     * @param string $minor
     *
     * @return self
     */
    public function setMinor(string $minor): self
    {
        $this->initialized['minor'] = true;
        $this->minor = $minor;
        return $this;
    }
    /**
     * Event severity
     *
     * @return string
     */
    public function getWarning(): string
    {
        return $this->warning;
    }
    /**
     * Event severity
     *
     * @param string $warning
     *
     * @return self
     */
    public function setWarning(string $warning): self
    {
        $this->initialized['warning'] = true;
        $this->warning = $warning;
        return $this;
    }
    /**
     * Event severity
     *
     * @return string
     */
    public function getInformational(): string
    {
        return $this->informational;
    }
    /**
     * Event severity
     *
     * @param string $informational
     *
     * @return self
     */
    public function setInformational(string $informational): self
    {
        $this->initialized['informational'] = true;
        $this->informational = $informational;
        return $this;
    }
    /**
     * Event severity
     *
     * @return string
     */
    public function getDebug(): string
    {
        return $this->debug;
    }
    /**
     * Event severity
     *
     * @param string $debug
     *
     * @return self
     */
    public function setDebug(string $debug): self
    {
        $this->initialized['debug'] = true;
        $this->debug = $debug;
        return $this;
    }
}