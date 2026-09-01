<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApPacketCaptureApPacketCaptureReq
{
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
}