<?php

namespace Docker\Api\Model;

class RegistryServiceConfig
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * List of IP ranges to which nondistributable artifacts can be pushed,
    using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior, and enables the daemon to
    push nondistributable artifacts to all registries whose resolved IP
    address is within the subnet described by the CIDR syntax.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @var list<string>
    */
    protected $allowNondistributableArtifactsCIDRs;
    /**
    * List of registry hostnames to which nondistributable artifacts can be
    pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior for the specified
    registries.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @var list<string>
    */
    protected $allowNondistributableArtifactsHostnames;
    /**
    * List of IP ranges of insecure registries, using the CIDR syntax
    ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
    accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
    from unknown CAs) communication.
    
    By default, local registries (`127.0.0.0/8`) are configured as
    insecure. All other registries are secure. Communicating with an
    insecure registry is not possible if the daemon assumes that registry
    is secure.
    
    This configuration override this behavior, insecure communication with
    registries whose resolved IP address is within the subnet described by
    the CIDR syntax.
    
    Registries can also be marked insecure by hostname. Those registries
    are listed under `IndexConfigs` and have their `Secure` field set to
    `false`.
    
    > **Warning**: Using this option can be useful when running a local
    > registry, but introduces security vulnerabilities. This option
    > should therefore ONLY be used for testing purposes. For increased
    > security, users should add their CA to their system's list of trusted
    > CAs instead of enabling this option.
    
    *
    * @var list<string>
    */
    protected $insecureRegistryCIDRs;
    /**
     * 
     *
     * @var array<string, IndexInfo>
     */
    protected $indexConfigs;
    /**
    * List of registry URLs that act as a mirror for the official
    (`docker.io`) registry.
    
    *
    * @var list<string>
    */
    protected $mirrors;
    /**
    * List of IP ranges to which nondistributable artifacts can be pushed,
    using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior, and enables the daemon to
    push nondistributable artifacts to all registries whose resolved IP
    address is within the subnet described by the CIDR syntax.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @return list<string>
    */
    public function getAllowNondistributableArtifactsCIDRs() : array
    {
        return $this->allowNondistributableArtifactsCIDRs;
    }
    /**
    * List of IP ranges to which nondistributable artifacts can be pushed,
    using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior, and enables the daemon to
    push nondistributable artifacts to all registries whose resolved IP
    address is within the subnet described by the CIDR syntax.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @param list<string> $allowNondistributableArtifactsCIDRs
    *
    * @return self
    */
    public function setAllowNondistributableArtifactsCIDRs(array $allowNondistributableArtifactsCIDRs) : self
    {
        $this->initialized['allowNondistributableArtifactsCIDRs'] = true;
        $this->allowNondistributableArtifactsCIDRs = $allowNondistributableArtifactsCIDRs;
        return $this;
    }
    /**
    * List of registry hostnames to which nondistributable artifacts can be
    pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior for the specified
    registries.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @return list<string>
    */
    public function getAllowNondistributableArtifactsHostnames() : array
    {
        return $this->allowNondistributableArtifactsHostnames;
    }
    /**
    * List of registry hostnames to which nondistributable artifacts can be
    pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior for the specified
    registries.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @param list<string> $allowNondistributableArtifactsHostnames
    *
    * @return self
    */
    public function setAllowNondistributableArtifactsHostnames(array $allowNondistributableArtifactsHostnames) : self
    {
        $this->initialized['allowNondistributableArtifactsHostnames'] = true;
        $this->allowNondistributableArtifactsHostnames = $allowNondistributableArtifactsHostnames;
        return $this;
    }
    /**
    * List of IP ranges of insecure registries, using the CIDR syntax
    ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
    accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
    from unknown CAs) communication.
    
    By default, local registries (`127.0.0.0/8`) are configured as
    insecure. All other registries are secure. Communicating with an
    insecure registry is not possible if the daemon assumes that registry
    is secure.
    
    This configuration override this behavior, insecure communication with
    registries whose resolved IP address is within the subnet described by
    the CIDR syntax.
    
    Registries can also be marked insecure by hostname. Those registries
    are listed under `IndexConfigs` and have their `Secure` field set to
    `false`.
    
    > **Warning**: Using this option can be useful when running a local
    > registry, but introduces security vulnerabilities. This option
    > should therefore ONLY be used for testing purposes. For increased
    > security, users should add their CA to their system's list of trusted
    > CAs instead of enabling this option.
    
    *
    * @return list<string>
    */
    public function getInsecureRegistryCIDRs() : array
    {
        return $this->insecureRegistryCIDRs;
    }
    /**
    * List of IP ranges of insecure registries, using the CIDR syntax
    ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
    accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
    from unknown CAs) communication.
    
    By default, local registries (`127.0.0.0/8`) are configured as
    insecure. All other registries are secure. Communicating with an
    insecure registry is not possible if the daemon assumes that registry
    is secure.
    
    This configuration override this behavior, insecure communication with
    registries whose resolved IP address is within the subnet described by
    the CIDR syntax.
    
    Registries can also be marked insecure by hostname. Those registries
    are listed under `IndexConfigs` and have their `Secure` field set to
    `false`.
    
    > **Warning**: Using this option can be useful when running a local
    > registry, but introduces security vulnerabilities. This option
    > should therefore ONLY be used for testing purposes. For increased
    > security, users should add their CA to their system's list of trusted
    > CAs instead of enabling this option.
    
    *
    * @param list<string> $insecureRegistryCIDRs
    *
    * @return self
    */
    public function setInsecureRegistryCIDRs(array $insecureRegistryCIDRs) : self
    {
        $this->initialized['insecureRegistryCIDRs'] = true;
        $this->insecureRegistryCIDRs = $insecureRegistryCIDRs;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, IndexInfo>
     */
    public function getIndexConfigs() : iterable
    {
        return $this->indexConfigs;
    }
    /**
     * 
     *
     * @param array<string, IndexInfo> $indexConfigs
     *
     * @return self
     */
    public function setIndexConfigs(iterable $indexConfigs) : self
    {
        $this->initialized['indexConfigs'] = true;
        $this->indexConfigs = $indexConfigs;
        return $this;
    }
    /**
    * List of registry URLs that act as a mirror for the official
    (`docker.io`) registry.
    
    *
    * @return list<string>
    */
    public function getMirrors() : array
    {
        return $this->mirrors;
    }
    /**
    * List of registry URLs that act as a mirror for the official
    (`docker.io`) registry.
    
    *
    * @param list<string> $mirrors
    *
    * @return self
    */
    public function setMirrors(array $mirrors) : self
    {
        $this->initialized['mirrors'] = true;
        $this->mirrors = $mirrors;
        return $this;
    }
}