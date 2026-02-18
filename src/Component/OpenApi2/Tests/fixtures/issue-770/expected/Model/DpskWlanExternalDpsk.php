<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanExternalDpsk
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
     * Enable External DPSK
     *
     * @var bool
     */
    protected $enabled = false;
    /**
     * Encryption of the WLAN relate to external DPSK
     *
     * @var DpskWlanExternalDpskEncryption
     */
    protected $encryption;
    /**
     * Autentication of the WLAN relate to external DPSK
     *
     * @var DpskWlanExternalDpskAuthService
     */
    protected $authService;
    /**
     * Enable External DPSK
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enable External DPSK
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Encryption of the WLAN relate to external DPSK
     *
     * @return DpskWlanExternalDpskEncryption
     */
    public function getEncryption(): DpskWlanExternalDpskEncryption
    {
        return $this->encryption;
    }
    /**
     * Encryption of the WLAN relate to external DPSK
     *
     * @param DpskWlanExternalDpskEncryption $encryption
     *
     * @return self
     */
    public function setEncryption(DpskWlanExternalDpskEncryption $encryption): self
    {
        $this->initialized['encryption'] = true;
        $this->encryption = $encryption;
        return $this;
    }
    /**
     * Autentication of the WLAN relate to external DPSK
     *
     * @return DpskWlanExternalDpskAuthService
     */
    public function getAuthService(): DpskWlanExternalDpskAuthService
    {
        return $this->authService;
    }
    /**
     * Autentication of the WLAN relate to external DPSK
     *
     * @param DpskWlanExternalDpskAuthService $authService
     *
     * @return self
     */
    public function setAuthService(DpskWlanExternalDpskAuthService $authService): self
    {
        $this->initialized['authService'] = true;
        $this->authService = $authService;
        return $this;
    }
}