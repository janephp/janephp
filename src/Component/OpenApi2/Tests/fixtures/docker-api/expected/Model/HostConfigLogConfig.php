<?php

namespace Docker\Api\Model;

class HostConfigLogConfig
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var iterable<string, string>
     */
    public iterable $config;
}