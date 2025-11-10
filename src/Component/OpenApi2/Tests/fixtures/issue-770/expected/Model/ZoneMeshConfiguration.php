<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneMeshConfiguration
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
     * SSID of the mesh network
     *
     * @var string
     */
    protected $ssid;
    /**
     * Passphrase for the mesh network. Would be mandatory when the mesh is enabled.
     *
     * @var string
     */
    protected $passphrase;
    /**
     * Mesh radio index
     *
     * @var string
     */
    protected $meshRadioIdx = 'Radio5G';
    /**
     * @var bool
     */
    protected $zeroTouchStatus;
    /**
     * SSID of the mesh network
     *
     * @return string
     */
    public function getSsid(): string
    {
        return $this->ssid;
    }
    /**
     * SSID of the mesh network
     *
     * @param string $ssid
     *
     * @return self
     */
    public function setSsid(string $ssid): self
    {
        $this->initialized['ssid'] = true;
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * Passphrase for the mesh network. Would be mandatory when the mesh is enabled.
     *
     * @return string
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    /**
     * Passphrase for the mesh network. Would be mandatory when the mesh is enabled.
     *
     * @param string $passphrase
     *
     * @return self
     */
    public function setPassphrase(string $passphrase): self
    {
        $this->initialized['passphrase'] = true;
        $this->passphrase = $passphrase;
        return $this;
    }
    /**
     * Mesh radio index
     *
     * @return string
     */
    public function getMeshRadioIdx(): string
    {
        return $this->meshRadioIdx;
    }
    /**
     * Mesh radio index
     *
     * @param string $meshRadioIdx
     *
     * @return self
     */
    public function setMeshRadioIdx(string $meshRadioIdx): self
    {
        $this->initialized['meshRadioIdx'] = true;
        $this->meshRadioIdx = $meshRadioIdx;
        return $this;
    }
    /**
     * @return bool
     */
    public function getZeroTouchStatus(): bool
    {
        return $this->zeroTouchStatus;
    }
    /**
     * @param bool $zeroTouchStatus
     *
     * @return self
     */
    public function setZeroTouchStatus(bool $zeroTouchStatus): self
    {
        $this->initialized['zeroTouchStatus'] = true;
        $this->zeroTouchStatus = $zeroTouchStatus;
        return $this;
    }
}