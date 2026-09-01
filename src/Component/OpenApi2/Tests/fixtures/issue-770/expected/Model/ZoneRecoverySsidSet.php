<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneRecoverySsidSet
{
    /**
     * Custom recovery ssid passphrase. If passphrase has been customized, this property cannot be empty in the future.
     *
     * @var string
     */
    public string $recoverySsidPskKey;
    /**
     * recovery ssid enable/disable
     *
     * @var bool
     */
    public bool $recoverySsidEnabled;
}