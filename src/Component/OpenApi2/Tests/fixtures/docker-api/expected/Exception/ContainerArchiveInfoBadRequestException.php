<?php

namespace Docker\Api\Exception;

class ContainerArchiveInfoBadRequestException extends BadRequestException
{
    /**
     * @var \Docker\Api\Model\ContainersIdArchiveHeadResponse400
     */
    private $containersIdArchiveHeadResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Docker\Api\Model\ContainersIdArchiveHeadResponse400 $containersIdArchiveHeadResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad parameter');
        $this->containersIdArchiveHeadResponse400 = $containersIdArchiveHeadResponse400;
        $this->response = $response;
    }
    public function getContainersIdArchiveHeadResponse400() : \Docker\Api\Model\ContainersIdArchiveHeadResponse400
    {
        return $this->containersIdArchiveHeadResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}