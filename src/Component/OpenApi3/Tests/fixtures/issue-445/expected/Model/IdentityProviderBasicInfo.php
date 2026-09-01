<?php

namespace PicturePark\API\Model;

class IdentityProviderBasicInfo
{
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    public ?string $displayName;
}