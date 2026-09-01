<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkValidationException
         */
        private readonly \PicturePark\API\Model\PictureparkValidationException $pictureparkValidationException,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Validation exception');
    }
    public function getPictureparkValidationException(): \PicturePark\API\Model\PictureparkValidationException
    {
        return $this->pictureparkValidationException;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}