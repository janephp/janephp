<?php

namespace PicturePark\API\Exception;

class MetadataUpdateOutdatedTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}