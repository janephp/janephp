<?php

namespace Docker\Api\Model;

class RestartPolicy
{
    /**
     * - Empty string means not to restart
     * - `no` Do not automatically restart
     * - `always` Always restart
     * - `unless-stopped` Restart always except when the user has manually stopped the container
     * - `on-failure` Restart only when the container exit code is non-zero
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     * 
     *
     * @var int
     */
    public int $maximumRetryCount;
}