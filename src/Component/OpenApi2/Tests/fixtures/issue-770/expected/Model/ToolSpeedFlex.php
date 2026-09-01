<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ToolSpeedFlex
{
    /**
     * SpeedFlex tool
     *
     * @var string
     */
    public string $tool;
    /**
     * Protocol used in the SpeedFlex test
     *
     * @var string
     */
    public string $protocol;
    /**
     * Test model
     *
     * @var string
     */
    public string $model;
    /**
     * @var string
     */
    public string $clientIp;
    /**
     * @var string
     */
    public string $clientMac;
    /**
     * @var string
     */
    public string $serverIp;
    /**
     * @var string
     */
    public string $serverMac;
    /**
     * Packet Length
     *
     * @var int
     */
    public int $syspmtu = 1472;
}