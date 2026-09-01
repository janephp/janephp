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
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad parameter');
    }
    public function getContainersIdArchiveHeadResponse400(): \Docker\Api\Model\ContainersIdArchiveHeadResponse400
    {
        return $this->containersIdArchiveHeadResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}