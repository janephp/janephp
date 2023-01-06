<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForLifeCyclesNotFoundException extends NotFoundException
{
    /**
     * @var \PicturePark\API\Model\PictureparkNotFoundException
     */
    private $pictureparkNotFoundException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\PicturePark\API\Model\PictureparkNotFoundException $pictureparkNotFoundException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Entity not found');
        $this->pictureparkNotFoundException = $pictureparkNotFoundException;
        $this->response = $response;
    }
    public function getPictureparkNotFoundException() : \PicturePark\API\Model\PictureparkNotFoundException
    {
        return $this->pictureparkNotFoundException;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}