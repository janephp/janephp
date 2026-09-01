<?php

namespace Docker\Api\Model;

class NodeSpec
{
    /**
     * Name for the node.
     *
     * @var string
     */
    public string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * Role of the node.
     *
     * @var string
     */
    public string $role;
    /**
     * Availability of the node.
     *
     * @var string
     */
    public string $availability;
}