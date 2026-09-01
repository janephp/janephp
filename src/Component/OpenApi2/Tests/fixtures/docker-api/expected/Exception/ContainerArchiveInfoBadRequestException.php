<?php

namespace Docker\Api\Exception;

class ContainerArchiveInfoBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Docker\Api\Model\ContainersIdArchiveHeadResponse400
         */
        private readonly \Docker\Api\Model\ContainersIdArchiveHeadResponse400 $containersIdArchiveHeadResponse400,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad parameter');
    }
    public function getContainersIdArchiveHeadResponse400(): \Docker\Api\Model\ContainersIdArchiveHeadResponse400
    {
        return $this->containersIdArchiveHeadResponse400;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}