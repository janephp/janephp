<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneSwitchGroupBindingCreateRecord
{
    /**
     * Zone ID for link
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Switch Group ID for link
     *
     * @var string
     */
    public string $switchGroupId;
    /**
     * Is Zone and Switch Group link
     *
     * @var bool
     */
    public bool $link;
}