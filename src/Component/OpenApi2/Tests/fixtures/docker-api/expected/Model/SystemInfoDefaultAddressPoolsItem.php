<?php

namespace Docker\Api\Model;

class SystemInfoDefaultAddressPoolsItem
{
    /**
     * The network address in CIDR format
     *
     * @var string
     */
    public string $base;
    /**
     * The network pool size
     *
     * @var int
     */
    public int $size;
}