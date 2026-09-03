<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ToolTestResult
{
    /**
     * @var string
     */
    public string $wcid;
    /**
     * Result ID
     *
     * @var int
     */
    public int $resultId;
    /**
     * Uplink
     *
     * @var int
     */
    public int $uplink;
    /**
     * Downlink
     *
     * @var int
     */
    public int $downlink;
    /**
     * Latency
     *
     * @var int
     */
    public int $latency;
    /**
     * Packet loss
     *
     * @var int
     */
    public int $packetLoss;
    /**
     * ETF
     *
     * @var int
     */
    public int $etf;
}