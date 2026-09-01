<?php

namespace Docker\Api\Model;

class OCIPlatform
{
    /**
     * The CPU architecture, for example `amd64` or `ppc64`.
     * 
     *
     * @var string
     */
    public string $architecture;
    /**
     * The operating system, for example `linux` or `windows`.
     * 
     *
     * @var string
     */
    public string $os;
    /**
     * Optional field specifying the operating system version, for example on
     * Windows `10.0.19041.1165`.
     * 
     *
     * @var string
     */
    public string $osVersion;
    /**
     * Optional field specifying an array of strings, each listing a required
     * OS feature (for example on Windows `win32k`).
     * 
     *
     * @var list<string>
     */
    public array $osFeatures;
    /**
     * Optional field specifying a variant of the CPU, for example `v7` to
     * specify ARMv7 when architecture is `arm`.
     * 
     *
     * @var string
     */
    public string $variant;
}