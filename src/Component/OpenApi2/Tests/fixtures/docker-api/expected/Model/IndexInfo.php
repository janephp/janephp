<?php

namespace Docker\Api\Model;

class IndexInfo
{
    /**
     * Name of the registry, such as "docker.io".
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * List of mirrors, expressed as URIs.
     * 
     *
     * @var list<string>
     */
    public array $mirrors;
    /**
     * Indicates if the registry is part of the list of insecure
     * registries.
     * 
     * If `false`, the registry is insecure. Insecure registries accept
     * un-encrypted (HTTP) and/or untrusted (HTTPS with certificates from
     * unknown CAs) communication.
     * 
     * > **Warning**: Insecure registries can be useful when running a local
     * > registry. However, because its use creates security vulnerabilities
     * > it should ONLY be enabled for testing purposes. For increased
     * > security, users should add their CA to their system's list of
     * > trusted CAs instead of enabling this option.
     * 
     *
     * @var bool
     */
    public bool $secure;
    /**
     * Indicates whether this is an official registry (i.e., Docker Hub / docker.io)
     * 
     *
     * @var bool
     */
    public bool $official;
}