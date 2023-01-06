<?php

namespace PicturePark\API\Exception;

class UserAssignUserRolesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \PicturePark\API\Model\PictureparkException
     */
    private $pictureparkException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\PicturePark\API\Model\PictureparkException $pictureparkException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal server error');
        $this->pictureparkException = $pictureparkException;
        $this->response = $response;
    }
    public function getPictureparkException() : \PicturePark\API\Model\PictureparkException
    {
        return $this->pictureparkException;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}