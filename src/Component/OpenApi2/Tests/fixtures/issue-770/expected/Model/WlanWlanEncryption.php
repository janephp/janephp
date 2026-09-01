<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanEncryption
{
    /**
     * Encryption method
     *
     * @var string
     */
    public string $method = 'None';
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @var string
     */
    public string $algorithm;
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
     *
     * @var string
     */
    public string $passphrase;
    /**
     * saePassphrase. This only applies to WPA3 and WPA23 mixed mode.
     *
     * @var string
     */
    public string $saePassphrase;
    /**
     * Management frame protection. This only applies to WPA2 + AES or OWE method.
     *
     * @var string
     */
    public string $mfp;
    /**
     * When enabled, the wifi client connected to this Access Point should use the most secure algorithm that the client supports to associate with AP. This is available only when WPA3 and OWE (Enhanced Open) are configured.
     *
     * @var bool
     */
    public bool $transitionDisable;
    /**
     * Key index. This only applies to WEP64 and WEP128.
     *
     * @var int
     */
    public int $keyIndex;
    /**
     * Key in hex format. This only applies to WEP64 and WEP128.
     *
     * @var string
     */
    public string $keyInHex;
    /**
     * Enable 802.11r Fast BSS Transition, fast Romaing.
     *
     * @var bool
     */
    public bool $support80211rEnabled;
    /**
     * Enable Reserve SSID.
     *
     * @var bool
     */
    public bool $reserveSsidEnabled;
    /**
     * mobility Domain Id.
     *
     * @var int
     */
    public int $mobilityDomainId;
}