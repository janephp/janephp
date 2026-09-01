<?php

namespace Docker\Api\Model;

class SwarmSpecCAConfigExternalCAsItem
{
    /**
     * Protocol for communication with the external CA (currently
     * only `cfssl` is supported).
     * 
     *
     * @var string
     */
    public string $protocol = 'cfssl';
    /**
     * URL where certificate signing requests should be sent.
     * 
     *
     * @var string
     */
    public string $uRL;
    /**
     * An object with key/value pairs that are interpreted as
     * protocol-specific options for the external CA driver.
     * 
     *
     * @var array<string, string>
     */
    public iterable $options;
    /**
     * The root CA certificate (in PEM format) this external CA uses
     * to issue TLS certificates (assumed to be to the current swarm
     * root CA certificate if not provided).
     * 
     *
     * @var string
     */
    public string $cACert;
}