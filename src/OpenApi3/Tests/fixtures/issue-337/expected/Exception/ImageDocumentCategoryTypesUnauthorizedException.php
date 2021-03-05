<?php

namespace CreditSafe\API\Exception;

class ImageDocumentCategoryTypesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}