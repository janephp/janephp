<?php

namespace CreditSafe\API\Exception;

class ImageDocumentCategoryTypesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}