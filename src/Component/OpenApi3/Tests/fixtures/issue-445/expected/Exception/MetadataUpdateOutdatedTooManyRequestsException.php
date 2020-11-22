<?php

namespace PicturePark\API\Exception;

class MetadataUpdateOutdatedTooManyRequestsException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Too many requests', 429);
    }
}