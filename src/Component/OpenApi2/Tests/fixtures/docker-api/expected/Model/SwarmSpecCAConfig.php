<?php

namespace Docker\Api\Model;

class SwarmSpecCAConfig
{
    /**
     * The duration node certificates are issued for.
     *
     * @var int
     */
    public int $nodeCertExpiry;
    /**
     * Configuration for forwarding signing requests to an external
     * certificate authority.
     * 
     *
     * @var list<SwarmSpecCAConfigExternalCAsItem>
     */
    public array $externalCAs;
    /**
     * The desired signing CA certificate for all swarm node TLS leaf
     * certificates, in PEM format.
     * 
     *
     * @var string
     */
    public string $signingCACert;
    /**
     * The desired signing CA key for all swarm node TLS leaf certificates,
     * in PEM format.
     * 
     *
     * @var string
     */
    public string $signingCAKey;
    /**
     * An integer whose purpose is to force swarm to generate a new
     * signing CA certificate and key, if none have been specified in
     * `SigningCACert` and `SigningCAKey`
     * 
     *
     * @var int
     */
    public int $forceRotate;
}