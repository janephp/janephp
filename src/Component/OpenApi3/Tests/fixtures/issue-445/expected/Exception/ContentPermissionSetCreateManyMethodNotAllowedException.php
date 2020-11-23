<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetCreateManyMethodNotAllowedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Method not allowed', 405);
    }
}