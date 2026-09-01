<?php

namespace Jane\Generated\DigitalOcean\Model;

class FloatingIpActionAssign extends FloatingIPsAction
{
    /**
     * The ID of the Droplet that the floating IP will be assigned to.
     *
     * @var int
     */
    public int $dropletId;
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['dropletId' => 'droplet_id']);
    }
}