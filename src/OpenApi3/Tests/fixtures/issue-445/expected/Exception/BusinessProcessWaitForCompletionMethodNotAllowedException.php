<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForCompletionMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}