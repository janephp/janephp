<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetPermissionsBadRequestException extends BadRequestException
{
    private $pictureparkValidationException;
    public function __construct(\PicturePark\API\Model\PictureparkValidationException $pictureparkValidationException)
    {
        parent::__construct('Validation exception', 400);
        $this->pictureparkValidationException = $pictureparkValidationException;
    }
    public function getPictureparkValidationException()
    {
        return $this->pictureparkValidationException;
    }
}