<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceCreateWebAuthentication
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var PortalservicePortalRedirect
     */
    protected $redirect;
    /**
     * @var CommonWebAuthenticationPortalCustomization
     */
    protected $webAuthenticationPortalCustomization;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return PortalservicePortalRedirect
     */
    public function getRedirect(): PortalservicePortalRedirect
    {
        return $this->redirect;
    }
    /**
     * @param PortalservicePortalRedirect $redirect
     *
     * @return self
     */
    public function setRedirect(PortalservicePortalRedirect $redirect): self
    {
        $this->initialized['redirect'] = true;
        $this->redirect = $redirect;
        return $this;
    }
    /**
     * @return CommonWebAuthenticationPortalCustomization
     */
    public function getWebAuthenticationPortalCustomization(): CommonWebAuthenticationPortalCustomization
    {
        return $this->webAuthenticationPortalCustomization;
    }
    /**
     * @param CommonWebAuthenticationPortalCustomization $webAuthenticationPortalCustomization
     *
     * @return self
     */
    public function setWebAuthenticationPortalCustomization(CommonWebAuthenticationPortalCustomization $webAuthenticationPortalCustomization): self
    {
        $this->initialized['webAuthenticationPortalCustomization'] = true;
        $this->webAuthenticationPortalCustomization = $webAuthenticationPortalCustomization;
        return $this;
    }
}