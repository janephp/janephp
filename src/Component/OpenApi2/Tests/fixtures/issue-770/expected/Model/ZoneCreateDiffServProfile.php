<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneCreateDiffServProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var ZoneUplinkDiffServ
     */
    public ZoneUplinkDiffServ $uplinkDiffServ;
    /**
     * @var ZoneDownlinkDiffServ
     */
    public ZoneDownlinkDiffServ $downlinkDiffServ;
    /**
     * Preserved list
     *
     * @var list<string>
     */
    public array $preservedList;
}