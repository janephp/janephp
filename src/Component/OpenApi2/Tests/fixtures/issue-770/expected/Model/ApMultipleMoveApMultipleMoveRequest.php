<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApMultipleMoveApMultipleMoveRequest
{
    /**
     * Target Zone Id for moving multiple APs
     *
     * @var string
     */
    public string $targetZoneId;
    /**
     * Target AP Group Id for moving multiple APs. The target AP group should be under the target Zone.
     *
     * @var string
     */
    public string $targetApGroupId;
    /**
     * List of AP MAC which wants to move. Maximum of AP MACs: 50.
     *
     * @var list<string>
     */
    public array $apMacs;
}