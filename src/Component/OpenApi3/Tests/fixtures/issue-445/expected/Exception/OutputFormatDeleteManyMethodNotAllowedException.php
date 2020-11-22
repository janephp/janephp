<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteManyMethodNotAllowedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Method not allowed', 405);
    }
}