<?php

namespace PicturePark\API\Exception;

class ShareGetTooManyRequestsException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Too many requests', 429);
    }
}