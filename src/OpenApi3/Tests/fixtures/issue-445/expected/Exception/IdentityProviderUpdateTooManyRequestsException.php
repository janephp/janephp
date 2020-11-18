<?php

namespace PicturePark\API\Exception;

class IdentityProviderUpdateTooManyRequestsException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Too many requests', 429);
    }
}