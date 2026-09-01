<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpskWlanExternalDpsk
{
    /**
     * Enable External DPSK
     *
     * @var bool
     */
    public bool $enabled = false;
    /**
     * Encryption of the WLAN relate to external DPSK
     *
     * @var DpskWlanExternalDpskEncryption
     */
    public DpskWlanExternalDpskEncryption $encryption;
    /**
     * Autentication of the WLAN relate to external DPSK
     *
     * @var DpskWlanExternalDpskAuthService
     */
    public DpskWlanExternalDpskAuthService $authService;
}