<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}