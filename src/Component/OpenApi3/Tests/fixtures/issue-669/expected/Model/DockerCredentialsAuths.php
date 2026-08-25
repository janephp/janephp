<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DockerCredentialsAuths implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['registryDigitaloceanCom' => ['registry.digitalocean.com', 'getRegistryDigitaloceanCom', 'setRegistryDigitaloceanCom']];
    }
}