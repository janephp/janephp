<?php

namespace CreditSafe\API\Exception;

class ImageDocumentCategoryTypesNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}