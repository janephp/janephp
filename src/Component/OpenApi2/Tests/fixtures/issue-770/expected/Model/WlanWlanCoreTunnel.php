<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanCoreTunnel
{
    /**
     * Tunnel type
     *
     * @var string
     */
    public string $type;
    /**
     * Identifier of the forwarding profile. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the forwarding profile. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $name;
}