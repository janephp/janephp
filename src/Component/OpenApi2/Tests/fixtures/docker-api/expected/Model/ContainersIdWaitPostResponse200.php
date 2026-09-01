<?php

namespace Docker\Api\Model;

class ContainersIdWaitPostResponse200
{
    /**
     * Exit code of the container
     *
     * @var int
     */
    public int $statusCode;
    /**
     * container waiting error, if any
     *
     * @var ContainersIdWaitPostResponse200Error
     */
    public ContainersIdWaitPostResponse200Error $error;
}