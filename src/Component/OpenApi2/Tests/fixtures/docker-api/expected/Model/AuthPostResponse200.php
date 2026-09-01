<?php

namespace Docker\Api\Model;

class AuthPostResponse200
{
    /**
     * The status of the authentication
     *
     * @var string
     */
    public string $status;
    /**
     * An opaque token used to authenticate a user after a successful login
     *
     * @var string
     */
    public string $identityToken;
}