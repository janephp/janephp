<?php

namespace PicturePark\API\Exception;

class ContentTransferOwnershipMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}