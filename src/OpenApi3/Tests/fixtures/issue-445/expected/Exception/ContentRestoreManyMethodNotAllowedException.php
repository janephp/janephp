<?php

namespace PicturePark\API\Exception;

class ContentRestoreManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}