<?php

namespace Docker\Api\Model;

class Port
{
    /**
     * Host IP address that the container's port is mapped to
     *
     * @var string
     */
    public string $iP;
    /**
     * Port on the container
     *
     * @var int
     */
    public int $privatePort;
    /**
     * Port exposed on the host
     *
     * @var int
     */
    public int $publicPort;
    /**
     * @var string
     */
    public string $type;
}