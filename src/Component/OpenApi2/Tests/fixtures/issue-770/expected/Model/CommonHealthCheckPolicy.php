<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonHealthCheckPolicy
{
    /**
     * Response window
     *
     * @var int
     */
    public int $responseWindow = 20;
    /**
     * Revive interval
     *
     * @var int
     */
    public int $reviveInterval = 120;
    /**
     * Zombie period
     *
     * @var int
     */
    public int $zombiePeriod = 40;
    /**
     * Response Fail
     *
     * @var bool
     */
    public bool $responseFail = 'false';
}