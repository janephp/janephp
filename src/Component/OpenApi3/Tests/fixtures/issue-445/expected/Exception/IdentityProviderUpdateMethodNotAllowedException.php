<?php

namespace PicturePark\API\Exception;

class IdentityProviderUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}