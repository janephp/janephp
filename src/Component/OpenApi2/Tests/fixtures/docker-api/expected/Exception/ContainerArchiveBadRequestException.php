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
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad parameter');
    }
    public function getContainersIdArchiveGetResponse400(): \Docker\Api\Model\ContainersIdArchiveGetResponse400
    {
        return $this->containersIdArchiveGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}