<?php

namespace Jane\Generated\DigitalOcean\Model;

class DockerCredentials extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var DockerCredentialsAuths
     */
    protected $auths;
    /**
     * @return DockerCredentialsAuths
     */
    public function getAuths(): DockerCredentialsAuths
    {
        return $this->auths;
    }
    /**
     * @param DockerCredentialsAuths $auths
     *
     * @return self
     */
    public function setAuths(DockerCredentialsAuths $auths): self
    {
        $this->initialized['auths'] = true;
        $this->auths = $auths;
        return $this;
    }
}