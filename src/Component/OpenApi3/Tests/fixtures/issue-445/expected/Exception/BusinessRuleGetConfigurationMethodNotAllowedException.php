<?php

namespace PicturePark\API\Exception;

class BusinessRuleGetConfigurationMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}