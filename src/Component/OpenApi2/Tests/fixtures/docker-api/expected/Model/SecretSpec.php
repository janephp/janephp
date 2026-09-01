<?php

namespace Docker\Api\Model;

class SecretSpec
{
    /**
     * User-defined name of the secret.
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
     * data to store as secret.
     * 
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
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
    public Driver $driver;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    public Driver $templating;
}