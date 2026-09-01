<?php

namespace Docker\Api\Model;

class HealthcheckResult
{
    /**
     * Date and time at which this check started in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     * 
     *
     * @var \DateTime
     */
    public \DateTime $start;
    /**
     * Date and time at which this check ended in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     * 
     *
     * @var string
     */
    public string $end;
    /**
     * ExitCode meanings:
     * 
     * - `0` healthy
     * - `1` unhealthy
     * - `2` reserved (considered unhealthy)
     * - other values: error running probe
     * 
     *
     * @var int
     */
    public int $exitCode;
    /**
     * Output from last check
     *
     * @var string
     */
    public string $output;
}