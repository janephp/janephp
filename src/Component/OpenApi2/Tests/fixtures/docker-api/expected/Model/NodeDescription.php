<?php

namespace Docker\Api\Model;

class NodeDescription
{
    /**
     * @var string
     */
    public string $hostname;
    /**
     * Platform represents the platform (Arch/OS).
     * 
     *
     * @var Platform
     */
    public Platform $platform;
    /**
     * An object describing the resources which can be advertised by a node and
     * requested by a task.
     * 
     *
     * @var ResourceObject
     */
    public ResourceObject $resources;
    /**
     * EngineDescription provides information about an engine.
     *
     * @var EngineDescription
     */
    public EngineDescription $engine;
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root
     * CA certificate.
     * 
     *
     * @var TLSInfo
     */
    public TLSInfo $tLSInfo;
}