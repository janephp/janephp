<?php

namespace Docker\Api\Model;

class MountPoint
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $source;
    /**
     * @var string
     */
    public string $destination;
    /**
     * @var string
     */
    public string $driver;
    /**
     * @var string
     */
    public string $mode;
    /**
     * @var bool
     */
    public bool $rW;
    /**
     * @var string
     */
    public string $propagation;
}