<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceWebAuthentication
{
    /**
     * Identifier of the web authentication profile
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the web authentication profile belongs to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Language
     *
     * @var string
     */
    public string $portalLanguage = 'en_US';
    /**
     * @var PortalservicePortalRedirect
     */
    public PortalservicePortalRedirect $redirect;
    /**
     * @var PortalserviceUserSession
     */
    public PortalserviceUserSession $userSession;
    /**
     * @var CommonWebAuthenticationPortalCustomization
     */
    public CommonWebAuthenticationPortalCustomization $webAuthenticationPortalCustomization;
}