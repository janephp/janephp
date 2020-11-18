<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteManyBadRequestException extends \RuntimeException implements ClientException
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