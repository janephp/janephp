<?php

namespace PicturePark\API\Exception;

class XmpMappingCreateManyBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkValidationException
         */
        private readonly \PicturePark\API\Model\PictureparkValidationException $pictureparkValidationException,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Validation exception');
    }
    public function getPictureparkValidationException(): \PicturePark\API\Model\PictureparkValidationException
    {
        return $this->pictureparkValidationException;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}