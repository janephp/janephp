<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApPacketCaptureApPacketCaptureReq
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
}