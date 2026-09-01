<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBlockClientListListItem
{
    /**
     * Identifier of the profile
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $mac;
    /**
     * Zone Id of the Block Client for clone in System Domain
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $description;
    /**
     * Date blocked of the Block Client
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Modifier blocked of the Block Client
     *
     * @var string
     */
    public string $modifierUsername;
}