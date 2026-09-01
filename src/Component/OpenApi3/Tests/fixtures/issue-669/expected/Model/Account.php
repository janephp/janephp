<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Account implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The total number of Droplets current user or team may have active at one time.
     * <br><br>Requires `droplet:read` scope.
     * 
     *
     * @var int
     */
    public int $dropletLimit;
    /**
     * The total number of Floating IPs the current user or team may have.
     * <br><br>Requires `reserved_ip:read` scope.
     * 
     *
     * @var int
     */
    public int $floatingIpLimit;
    /**
     * The email address used by the current user to register for DigitalOcean.
     *
     * @var string
     */
    public string $email;
    /**
     * The display name for the current user.
     *
     * @var string
     */
    public string $name;
    /**
     * The unique universal identifier for the current user.
     *
     * @var string
     */
    public string $uuid;
    /**
     * If true, the user has verified their account via email. False otherwise.
     *
     * @var bool
     */
    public bool $emailVerified = false;
    /**
     * This value is one of "active", "warning" or "locked".
     *
     * @var string
     */
    public string $status = 'active';
    /**
     * A human-readable message giving more details about the status of the account.
     *
     * @var string
     */
    public string $statusMessage;
    /**
     * When authorized in a team context, includes information about the current team.
     *
     * @var AccountTeam
     */
    public AccountTeam $team;
    public function definedProperties(): array
    {
        return ['dropletLimit' => 'droplet_limit', 'floatingIpLimit' => 'floating_ip_limit', 'email' => 'email', 'name' => 'name', 'uuid' => 'uuid', 'emailVerified' => 'email_verified', 'status' => 'status', 'statusMessage' => 'status_message', 'team' => 'team'];
    }
}