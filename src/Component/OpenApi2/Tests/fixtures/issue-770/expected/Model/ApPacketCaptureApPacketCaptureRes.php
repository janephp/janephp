<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApPacketCaptureApPacketCaptureRes
{
    /**
     * AP MAC address
     *
     * @var string
     */
    public string $apMac;
    /**
     * Capture interface
     *
     * @var string
     */
    public string $captureInterface;
    /**
     * Wireshark host IP
     *
     * @var string
     */
    public string $hostIp;
    /**
     * MAC filter
     *
     * @var string
     */
    public string $includedMac;
    /**
     * Frame type filter
     *
     * @var list<string>
     */
    public array $includedFrameTypes;
    /**
     * Capture mode
     *
     * @var string
     */
    public string $captureMode;
    /**
     * Capture state
     *
     * @var string
     */
    public string $captureState;
}