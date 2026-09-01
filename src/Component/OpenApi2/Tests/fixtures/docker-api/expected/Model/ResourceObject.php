<?php

namespace Docker\Api\Model;

class ResourceObject
{
    /**
     * @var int
     */
    public int $nanoCPUs;
    /**
     * @var int
     */
    public int $memoryBytes;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     * 
     *
     * @var list<GenericResourcesItem>
     */
    public array $genericResources;
}