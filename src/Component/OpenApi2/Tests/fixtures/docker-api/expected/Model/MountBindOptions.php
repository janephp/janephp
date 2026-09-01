<?php

namespace Docker\Api\Model;

class MountBindOptions
{
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @var string
     */
    public string $propagation;
    /**
     * Disable recursive bind mount.
     *
     * @var bool
     */
    public bool $nonRecursive = false;
}