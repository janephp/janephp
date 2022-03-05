<?php

namespace Docker\Api\Model;

class NodeDescription
{
    /**
     * 
     *
     * @var string
     */
    protected $hostname;
    /**
     * Platform represents the platform (Arch/OS).
     *
     * @var Platform
     */
    protected $platform;
    /**
    * An object describing the resources which can be advertised by a node and
    requested by a task.
    
    *
    * @var ResourceObject
    */
    protected $resources;
    /**
     * EngineDescription provides information about an engine.
     *
     * @var EngineDescription
     */
    protected $engine;
    /**
    * Information about the issuer of leaf TLS certificates and the trusted root
    CA certificate.
    
    *
    * @var TLSInfo
    */
    protected $tLSInfo;
    /**
     * 
     *
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname) : self
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Platform represents the platform (Arch/OS).
     *
     * @return Platform
     */
    public function getPlatform() : Platform
    {
        return $this->platform;
    }
    /**
     * Platform represents the platform (Arch/OS).
     *
     * @param Platform $platform
     *
     * @return self
     */
    public function setPlatform(Platform $platform) : self
    {
        $this->platform = $platform;
        return $this;
    }
    /**
    * An object describing the resources which can be advertised by a node and
    requested by a task.
    
    *
    * @return ResourceObject
    */
    public function getResources() : ResourceObject
    {
        return $this->resources;
    }
    /**
    * An object describing the resources which can be advertised by a node and
    requested by a task.
    
    *
    * @param ResourceObject $resources
    *
    * @return self
    */
    public function setResources(ResourceObject $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * EngineDescription provides information about an engine.
     *
     * @return EngineDescription
     */
    public function getEngine() : EngineDescription
    {
        return $this->engine;
    }
    /**
     * EngineDescription provides information about an engine.
     *
     * @param EngineDescription $engine
     *
     * @return self
     */
    public function setEngine(EngineDescription $engine) : self
    {
        $this->engine = $engine;
        return $this;
    }
    /**
    * Information about the issuer of leaf TLS certificates and the trusted root
    CA certificate.
    
    *
    * @return TLSInfo
    */
    public function getTLSInfo() : TLSInfo
    {
        return $this->tLSInfo;
    }
    /**
    * Information about the issuer of leaf TLS certificates and the trusted root
    CA certificate.
    
    *
    * @param TLSInfo $tLSInfo
    *
    * @return self
    */
    public function setTLSInfo(TLSInfo $tLSInfo) : self
    {
        $this->tLSInfo = $tLSInfo;
        return $this;
    }
}