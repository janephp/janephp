<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApMesh
{
    /**
     * mesh mode
     *
     * @var string
     */
    public string $meshMode;
    /**
     * Uplink selection
     *
     * @var string
     */
    public string $uplinkSelection;
    /**
     * MAC address of the neighbor AP
     *
     * @var list<string>
     */
    public array $meshUplinkEntryList;
    /**
     * The radio being used to establish mesh link with available neighbor
     *
     * @var string
     */
    public string $uplinkRadio;
}