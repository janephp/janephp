<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityPackageConfiguration
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
     * @var CommonGenericRef
     */
    protected $subscriberPackage;
    /**
     * Package expiration interval and value
     *
     * @var string
     */
    protected $packageExpiration;
    /**
     * @return CommonGenericRef
     */
    public function getSubscriberPackage(): CommonGenericRef
    {
        return $this->subscriberPackage;
    }
    /**
     * @param CommonGenericRef $subscriberPackage
     *
     * @return self
     */
    public function setSubscriberPackage(CommonGenericRef $subscriberPackage): self
    {
        $this->initialized['subscriberPackage'] = true;
        $this->subscriberPackage = $subscriberPackage;
        return $this;
    }
    /**
     * Package expiration interval and value
     *
     * @return string
     */
    public function getPackageExpiration(): string
    {
        return $this->packageExpiration;
    }
    /**
     * Package expiration interval and value
     *
     * @param string $packageExpiration
     *
     * @return self
     */
    public function setPackageExpiration(string $packageExpiration): self
    {
        $this->initialized['packageExpiration'] = true;
        $this->packageExpiration = $packageExpiration;
        return $this;
    }
}