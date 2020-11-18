<?php

namespace PicturePark\API\Exception;

class ListItemDeleteMethodNotAllowedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Method not allowed', 405);
    }
}