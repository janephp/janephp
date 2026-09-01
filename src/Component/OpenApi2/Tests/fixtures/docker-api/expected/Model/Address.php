<?php

namespace Docker\Api\Model;

class Address
{
    /**
     * IP address.
     *
     * @var string
     */
    public string $addr;
    /**
     * Mask length of the IP address.
     *
     * @var int
     */
    public int $prefixLen;
}