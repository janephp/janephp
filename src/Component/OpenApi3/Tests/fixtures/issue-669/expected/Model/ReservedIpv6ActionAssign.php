<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpv6ActionAssign extends ReservedIpv6ActionType
{
    /**
     * The ID of the Droplet that the reserved IPv6 will be assigned to.
     *
     * @var int
     */
    public int $dropletId;
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['dropletId' => 'droplet_id']);
    }
}