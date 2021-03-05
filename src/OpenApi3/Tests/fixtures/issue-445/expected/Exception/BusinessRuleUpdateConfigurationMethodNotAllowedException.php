<?php

namespace PicturePark\API\Exception;

class BusinessRuleUpdateConfigurationMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}