<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateMethodNotAllowedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Method not allowed', 405);
    }
}