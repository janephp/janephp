<?php

namespace Docker\Api\Exception;

class ContainerArchiveInfoBadRequestException extends BadRequestException
{
    /**
     * @var \Docker\Api\Model\ContainersIdArchiveHeadResponse400
     */
    private $containersIdArchiveHeadResponse400;
    public function __construct(\Docker\Api\Model\ContainersIdArchiveHeadResponse400 $containersIdArchiveHeadResponse400)
    {
        parent::__construct('Bad parameter');
        $this->containersIdArchiveHeadResponse400 = $containersIdArchiveHeadResponse400;
    }
    public function getContainersIdArchiveHeadResponse400() : \Docker\Api\Model\ContainersIdArchiveHeadResponse400
    {
        return $this->containersIdArchiveHeadResponse400;
    }
}