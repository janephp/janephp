<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneMeshConfiguration
{
    /**
     * SSID of the mesh network
     *
     * @var string
     */
    public string $ssid;
    /**
     * Passphrase for the mesh network. Would be mandatory when the mesh is enabled.
     *
     * @var string
     */
    public string $passphrase;
    /**
     * Mesh radio index
     *
     * @var string
     */
    public string $meshRadioIdx = 'Radio5G';
    /**
     * @var bool
     */
    public bool $zeroTouchStatus;
}