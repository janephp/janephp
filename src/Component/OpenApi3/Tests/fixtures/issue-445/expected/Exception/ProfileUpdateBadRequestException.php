<?php

namespace PicturePark\API\Exception;

class ProfileUpdateBadRequestException extends BadRequestException
{
    /**
     * @var \PicturePark\API\Model\PictureparkValidationException
     */
    private $pictureparkValidationException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\PicturePark\API\Model\PictureparkValidationException $pictureparkValidationException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation exception');
        $this->pictureparkValidationException = $pictureparkValidationException;
        $this->response = $response;
    }
    public function getPictureparkValidationException() : \PicturePark\API\Model\PictureparkValidationException
    {
        return $this->pictureparkValidationException;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}