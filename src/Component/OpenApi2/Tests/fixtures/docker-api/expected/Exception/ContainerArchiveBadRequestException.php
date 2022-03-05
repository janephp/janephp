<?php

namespace Docker\Api\Exception;

class ContainerArchiveBadRequestException extends BadRequestException
{
    /**
     * @var \Docker\Api\Model\ContainersIdArchiveGetResponse400
     */
    private $containersIdArchiveGetResponse400;
    public function __construct(\Docker\Api\Model\ContainersIdArchiveGetResponse400 $containersIdArchiveGetResponse400)
    {
        parent::__construct('Bad parameter');
        $this->containersIdArchiveGetResponse400 = $containersIdArchiveGetResponse400;
    }
    public function getContainersIdArchiveGetResponse400() : \Docker\Api\Model\ContainersIdArchiveGetResponse400
    {
        return $this->containersIdArchiveGetResponse400;
    }
}