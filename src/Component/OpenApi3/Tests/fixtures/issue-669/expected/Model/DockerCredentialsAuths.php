<?php

namespace Jane\Generated\DigitalOcean\Model;

class DockerCredentialsAuths extends \ArrayObject
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
     * @var DockerCredentialsAuthsRegistryDigitaloceanCom
     */
    protected $registryDigitaloceanCom;
    /**
     * @return DockerCredentialsAuthsRegistryDigitaloceanCom
     */
    public function getRegistryDigitaloceanCom(): DockerCredentialsAuthsRegistryDigitaloceanCom
    {
        return $this->registryDigitaloceanCom;
    }
    /**
     * @param DockerCredentialsAuthsRegistryDigitaloceanCom $registryDigitaloceanCom
     *
     * @return self
     */
    public function setRegistryDigitaloceanCom(DockerCredentialsAuthsRegistryDigitaloceanCom $registryDigitaloceanCom): self
    {
        $this->initialized['registryDigitaloceanCom'] = true;
        $this->registryDigitaloceanCom = $registryDigitaloceanCom;
        return $this;
    }
}