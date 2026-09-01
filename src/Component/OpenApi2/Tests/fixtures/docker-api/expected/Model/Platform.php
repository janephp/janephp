<?php

namespace Docker\Api\Model;

class Platform
{
    /**
     * Architecture represents the hardware architecture (for example,
     * `x86_64`).
     * 
     *
     * @var string
     */
    public string $architecture;
    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     * 
     *
     * @var string
     */
    public string $oS;
}