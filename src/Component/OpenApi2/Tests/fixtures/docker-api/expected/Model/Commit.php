<?php

namespace Docker\Api\Model;

class Commit
{
    /**
     * Actual commit ID of external tool.
     *
     * @var string
     */
    public string $iD;
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     * 
     *
     * @var string
     */
    public string $expected;
}