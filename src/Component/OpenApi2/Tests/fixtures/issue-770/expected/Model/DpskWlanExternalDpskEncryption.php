<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanExternalDpskEncryption
{
    /**
     * Encryption method
     *
     * @var string
     */
    public string $method;
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
     * Encryption mfp
     *
     * @var string
     */
    public string $mfp;
}