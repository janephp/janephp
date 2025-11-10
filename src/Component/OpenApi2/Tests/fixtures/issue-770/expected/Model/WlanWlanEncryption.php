<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanEncryption
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
     * Encryption method
     *
     * @var string
     */
    protected $method = 'None';
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @var string
     */
    protected $algorithm;
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
     *
     * @var string
     */
    protected $passphrase;
    /**
     * saePassphrase. This only applies to WPA3 and WPA23 mixed mode.
     *
     * @var string
     */
    protected $saePassphrase;
    /**
     * Management frame protection. This only applies to WPA2 + AES or OWE method.
     *
     * @var string
     */
    protected $mfp;
    /**
     * When enabled, the wifi client connected to this Access Point should use the most secure algorithm that the client supports to associate with AP. This is available only when WPA3 and OWE (Enhanced Open) are configured.
     *
     * @var bool
     */
    protected $transitionDisable;
    /**
     * Key index. This only applies to WEP64 and WEP128.
     *
     * @var int
     */
    protected $keyIndex;
    /**
     * Key in hex format. This only applies to WEP64 and WEP128.
     *
     * @var string
     */
    protected $keyInHex;
    /**
     * Enable 802.11r Fast BSS Transition, fast Romaing.
     *
     * @var bool
     */
    protected $support80211rEnabled;
    /**
     * Enable Reserve SSID.
     *
     * @var bool
     */
    protected $reserveSsidEnabled;
    /**
     * mobility Domain Id.
     *
     * @var int
     */
    protected $mobilityDomainId;
    /**
     * Encryption method
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Encryption method
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @param string $algorithm
     *
     * @return self
     */
    public function setAlgorithm(string $algorithm): self
    {
        $this->initialized['algorithm'] = true;
        $this->algorithm = $algorithm;
        return $this;
    }
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
     *
     * @return string
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
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
     * saePassphrase. This only applies to WPA3 and WPA23 mixed mode.
     *
     * @return string
     */
    public function getSaePassphrase(): string
    {
        return $this->saePassphrase;
    }
    /**
     * saePassphrase. This only applies to WPA3 and WPA23 mixed mode.
     *
     * @param string $saePassphrase
     *
     * @return self
     */
    public function setSaePassphrase(string $saePassphrase): self
    {
        $this->initialized['saePassphrase'] = true;
        $this->saePassphrase = $saePassphrase;
        return $this;
    }
    /**
     * Management frame protection. This only applies to WPA2 + AES or OWE method.
     *
     * @return string
     */
    public function getMfp(): string
    {
        return $this->mfp;
    }
    /**
     * Management frame protection. This only applies to WPA2 + AES or OWE method.
     *
     * @param string $mfp
     *
     * @return self
     */
    public function setMfp(string $mfp): self
    {
        $this->initialized['mfp'] = true;
        $this->mfp = $mfp;
        return $this;
    }
    /**
     * When enabled, the wifi client connected to this Access Point should use the most secure algorithm that the client supports to associate with AP. This is available only when WPA3 and OWE (Enhanced Open) are configured.
     *
     * @return bool
     */
    public function getTransitionDisable(): bool
    {
        return $this->transitionDisable;
    }
    /**
     * When enabled, the wifi client connected to this Access Point should use the most secure algorithm that the client supports to associate with AP. This is available only when WPA3 and OWE (Enhanced Open) are configured.
     *
     * @param bool $transitionDisable
     *
     * @return self
     */
    public function setTransitionDisable(bool $transitionDisable): self
    {
        $this->initialized['transitionDisable'] = true;
        $this->transitionDisable = $transitionDisable;
        return $this;
    }
    /**
     * Key index. This only applies to WEP64 and WEP128.
     *
     * @return int
     */
    public function getKeyIndex(): int
    {
        return $this->keyIndex;
    }
    /**
     * Key index. This only applies to WEP64 and WEP128.
     *
     * @param int $keyIndex
     *
     * @return self
     */
    public function setKeyIndex(int $keyIndex): self
    {
        $this->initialized['keyIndex'] = true;
        $this->keyIndex = $keyIndex;
        return $this;
    }
    /**
     * Key in hex format. This only applies to WEP64 and WEP128.
     *
     * @return string
     */
    public function getKeyInHex(): string
    {
        return $this->keyInHex;
    }
    /**
     * Key in hex format. This only applies to WEP64 and WEP128.
     *
     * @param string $keyInHex
     *
     * @return self
     */
    public function setKeyInHex(string $keyInHex): self
    {
        $this->initialized['keyInHex'] = true;
        $this->keyInHex = $keyInHex;
        return $this;
    }
    /**
     * Enable 802.11r Fast BSS Transition, fast Romaing.
     *
     * @return bool
     */
    public function getSupport80211rEnabled(): bool
    {
        return $this->support80211rEnabled;
    }
    /**
     * Enable 802.11r Fast BSS Transition, fast Romaing.
     *
     * @param bool $support80211rEnabled
     *
     * @return self
     */
    public function setSupport80211rEnabled(bool $support80211rEnabled): self
    {
        $this->initialized['support80211rEnabled'] = true;
        $this->support80211rEnabled = $support80211rEnabled;
        return $this;
    }
    /**
     * Enable Reserve SSID.
     *
     * @return bool
     */
    public function getReserveSsidEnabled(): bool
    {
        return $this->reserveSsidEnabled;
    }
    /**
     * Enable Reserve SSID.
     *
     * @param bool $reserveSsidEnabled
     *
     * @return self
     */
    public function setReserveSsidEnabled(bool $reserveSsidEnabled): self
    {
        $this->initialized['reserveSsidEnabled'] = true;
        $this->reserveSsidEnabled = $reserveSsidEnabled;
        return $this;
    }
    /**
     * mobility Domain Id.
     *
     * @return int
     */
    public function getMobilityDomainId(): int
    {
        return $this->mobilityDomainId;
    }
    /**
     * mobility Domain Id.
     *
     * @param int $mobilityDomainId
     *
     * @return self
     */
    public function setMobilityDomainId(int $mobilityDomainId): self
    {
        $this->initialized['mobilityDomainId'] = true;
        $this->mobilityDomainId = $mobilityDomainId;
        return $this;
    }
}