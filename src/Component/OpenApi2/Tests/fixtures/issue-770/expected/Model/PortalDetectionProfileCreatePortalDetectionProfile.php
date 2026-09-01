<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalDetectionProfileCreatePortalDetectionProfile
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
     * The pattern profiles for portal detection and suppression
     *
     * @var list<PortalDetectionProfilePortalDetectionPattern>
     */
    public array $portalDetectionPatterns;
}