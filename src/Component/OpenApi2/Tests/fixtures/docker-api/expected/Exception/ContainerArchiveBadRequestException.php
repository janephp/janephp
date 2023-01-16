<?php

namespace Docker\Api\Exception;

class ContainerArchiveBadRequestException extends BadRequestException
{
    /**
     * @var \Docker\Api\Model\ContainersIdArchiveGetResponse400
     */
    private $containersIdArchiveGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Docker\Api\Model\ContainersIdArchiveGetResponse400 $containersIdArchiveGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad parameter');
        $this->containersIdArchiveGetResponse400 = $containersIdArchiveGetResponse400;
        $this->response = $response;
    }
    public function getContainersIdArchiveGetResponse400() : \Docker\Api\Model\ContainersIdArchiveGetResponse400
    {
        return $this->containersIdArchiveGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}