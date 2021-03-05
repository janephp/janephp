<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}