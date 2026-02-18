<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApPacketCaptureApPacketCaptureRes
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
     * AP MAC address
     *
     * @var string
     */
    protected $apMac;
    /**
     * Capture interface
     *
     * @var string
     */
    protected $captureInterface;
    /**
     * Wireshark host IP
     *
     * @var string
     */
    protected $hostIp;
    /**
     * MAC filter
     *
     * @var string
     */
    protected $includedMac;
    /**
     * Frame type filter
     *
     * @var list<string>
     */
    protected $includedFrameTypes;
    /**
     * Capture mode
     *
     * @var string
     */
    protected $captureMode;
    /**
     * Capture state
     *
     * @var string
     */
    protected $captureState;
    /**
     * AP MAC address
     *
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * AP MAC address
     *
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * Capture interface
     *
     * @return string
     */
    public function getCaptureInterface(): string
    {
        return $this->captureInterface;
    }
    /**
     * Capture interface
     *
     * @param string $captureInterface
     *
     * @return self
     */
    public function setCaptureInterface(string $captureInterface): self
    {
        $this->initialized['captureInterface'] = true;
        $this->captureInterface = $captureInterface;
        return $this;
    }
    /**
     * Wireshark host IP
     *
     * @return string
     */
    public function getHostIp(): string
    {
        return $this->hostIp;
    }
    /**
     * Wireshark host IP
     *
     * @param string $hostIp
     *
     * @return self
     */
    public function setHostIp(string $hostIp): self
    {
        $this->initialized['hostIp'] = true;
        $this->hostIp = $hostIp;
        return $this;
    }
    /**
     * MAC filter
     *
     * @return string
     */
    public function getIncludedMac(): string
    {
        return $this->includedMac;
    }
    /**
     * MAC filter
     *
     * @param string $includedMac
     *
     * @return self
     */
    public function setIncludedMac(string $includedMac): self
    {
        $this->initialized['includedMac'] = true;
        $this->includedMac = $includedMac;
        return $this;
    }
    /**
     * Frame type filter
     *
     * @return list<string>
     */
    public function getIncludedFrameTypes(): array
    {
        return $this->includedFrameTypes;
    }
    /**
     * Frame type filter
     *
     * @param list<string> $includedFrameTypes
     *
     * @return self
     */
    public function setIncludedFrameTypes(array $includedFrameTypes): self
    {
        $this->initialized['includedFrameTypes'] = true;
        $this->includedFrameTypes = $includedFrameTypes;
        return $this;
    }
    /**
     * Capture mode
     *
     * @return string
     */
    public function getCaptureMode(): string
    {
        return $this->captureMode;
    }
    /**
     * Capture mode
     *
     * @param string $captureMode
     *
     * @return self
     */
    public function setCaptureMode(string $captureMode): self
    {
        $this->initialized['captureMode'] = true;
        $this->captureMode = $captureMode;
        return $this;
    }
    /**
     * Capture state
     *
     * @return string
     */
    public function getCaptureState(): string
    {
        return $this->captureState;
    }
    /**
     * Capture state
     *
     * @param string $captureState
     *
     * @return self
     */
    public function setCaptureState(string $captureState): self
    {
        $this->initialized['captureState'] = true;
        $this->captureState = $captureState;
        return $this;
    }
}