<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpActionAssign extends ReservedIpActionType
{
    /**
     * The ID of the Droplet that the reserved IP will be assigned to.
     *
     * @var int
     */
    public int $dropletId;
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['dropletId' => 'droplet_id']);
    }
}