<?php

namespace PicturePark\API\Model;

class IdpClaimToUserAttributeMapping
{
    /**
     * Claim type name coming from external identity provider
     *
     * @var string|null
     */
    public ?string $claimType;
    /**
     * Path to a user attribute to synchronize
     *
     * @var string|null
     */
    public ?string $userAttributePath;
}