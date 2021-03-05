<?php

namespace PicturePark\API\Exception;

class MetadataUpdateOutdatedMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}