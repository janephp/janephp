<?php

namespace PicturePark\API\Exception;

class SchemaExistsBadRequestException extends BadRequestException
{
    /**
     * @var \PicturePark\API\Model\PictureparkValidationException
     */
    private $pictureparkValidationException;
    public function __construct(\PicturePark\API\Model\PictureparkValidationException $pictureparkValidationException)
    {
        parent::__construct('Validation exception', 400);
        $this->pictureparkValidationException = $pictureparkValidationException;
    }
    public function getPictureparkValidationException() : \PicturePark\API\Model\PictureparkValidationException
    {
        return $this->pictureparkValidationException;
    }
}