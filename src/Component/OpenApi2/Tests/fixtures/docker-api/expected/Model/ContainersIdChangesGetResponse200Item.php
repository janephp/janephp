<?php

namespace Docker\Api\Model;

class ContainersIdChangesGetResponse200Item
{
    /**
     * Path to file that has changed
     *
     * @var string
     */
    public string $path;
    /**
     * Kind of change
     *
     * @var int
     */
    public int $kind;
}