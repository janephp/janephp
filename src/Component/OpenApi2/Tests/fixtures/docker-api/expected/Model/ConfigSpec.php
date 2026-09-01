<?php

namespace Docker\Api\Model;

class ConfigSpec
{
    /**
     * User-defined name of the config.
     *
     * @var string
     */
    public string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
     * config data.
     * 
     *
     * @var string
     */
    public string $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    public Driver $templating;
}