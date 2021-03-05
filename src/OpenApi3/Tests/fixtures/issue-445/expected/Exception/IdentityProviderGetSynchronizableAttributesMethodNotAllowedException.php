<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetSynchronizableAttributesMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}