<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceWebAuthentication
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
     * Identifier of the web authentication profile
     *
     * @var string
     */
    protected $id;
    /**
     * Identifier of the zone which the web authentication profile belongs to
     *
     * @var string
     */
    protected $zoneId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Language
     *
     * @var string
     */
    protected $portalLanguage = 'en_US';
    /**
     * @var PortalservicePortalRedirect
     */
    protected $redirect;
    /**
     * @var PortalserviceUserSession
     */
    protected $userSession;
    /**
     * @var CommonWebAuthenticationPortalCustomization
     */
    protected $webAuthenticationPortalCustomization;
    /**
     * Identifier of the web authentication profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the web authentication profile
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier of the zone which the web authentication profile belongs to
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the zone which the web authentication profile belongs to
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
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
     * Language
     *
     * @return string
     */
    public function getPortalLanguage(): string
    {
        return $this->portalLanguage;
    }
    /**
     * Language
     *
     * @param string $portalLanguage
     *
     * @return self
     */
    public function setPortalLanguage(string $portalLanguage): self
    {
        $this->initialized['portalLanguage'] = true;
        $this->portalLanguage = $portalLanguage;
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
     * @return PortalserviceUserSession
     */
    public function getUserSession(): PortalserviceUserSession
    {
        return $this->userSession;
    }
    /**
     * @param PortalserviceUserSession $userSession
     *
     * @return self
     */
    public function setUserSession(PortalserviceUserSession $userSession): self
    {
        $this->initialized['userSession'] = true;
        $this->userSession = $userSession;
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