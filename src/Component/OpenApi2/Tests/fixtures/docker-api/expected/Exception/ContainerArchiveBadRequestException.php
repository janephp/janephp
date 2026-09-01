<?php

namespace Docker\Api\Exception;

class ContainerArchiveBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Docker\Api\Model\ContainersIdArchiveGetResponse400
         */
        private readonly \Docker\Api\Model\ContainersIdArchiveGetResponse400 $containersIdArchiveGetResponse400,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad parameter');
    }
    public function getContainersIdArchiveGetResponse400(): \Docker\Api\Model\ContainersIdArchiveGetResponse400
    {
        return $this->containersIdArchiveGetResponse400;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}