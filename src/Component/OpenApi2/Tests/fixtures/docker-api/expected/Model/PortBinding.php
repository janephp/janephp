<?php

namespace Docker\Api\Model;

class PortBinding
{
    /**
     * Host IP address that the container's port is mapped to.
     *
     * @var string
     */
    public string $hostIp;
    /**
     * Host port number that the container's port is mapped to.
     *
     * @var string
     */
    public string $hostPort;
}