<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Account implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The total number of Droplets current user or team may have active at one time.
     * <br><br>Requires `droplet:read` scope.
     * 
     *
     * @var int
     */
    protected $dropletLimit;
    /**
     * The total number of Floating IPs the current user or team may have.
     * <br><br>Requires `reserved_ip:read` scope.
     * 
     *
     * @var int
     */
    protected $floatingIpLimit;
    /**
     * The email address used by the current user to register for DigitalOcean.
     *
     * @var string
     */
    protected $email;
    /**
     * The display name for the current user.
     *
     * @var string
     */
    protected $name;
    /**
     * The unique universal identifier for the current user.
     *
     * @var string
     */
    protected $uuid;
    /**
     * If true, the user has verified their account via email. False otherwise.
     *
     * @var bool
     */
    protected $emailVerified = false;
    /**
     * This value is one of "active", "warning" or "locked".
     *
     * @var string
     */
    protected $status = 'active';
    /**
     * A human-readable message giving more details about the status of the account.
     *
     * @var string
     */
    protected $statusMessage;
    /**
     * When authorized in a team context, includes information about the current team.
     *
     * @var AccountTeam
     */
    protected $team;
    /**
     * The total number of Droplets current user or team may have active at one time.
     * <br><br>Requires `droplet:read` scope.
     * 
     *
     * @return int
     */
    public function getDropletLimit(): int
    {
        return $this->dropletLimit;
    }
    /**
    * The total number of Droplets current user or team may have active at one time.
    <br><br>Requires `droplet:read` scope.
    
    *
    * @param int $dropletLimit
    *
    * @return self
    */
    public function setDropletLimit(int $dropletLimit): self
    {
        $this->initialized['dropletLimit'] = true;
        $this->dropletLimit = $dropletLimit;
        return $this;
    }
    /**
     * The total number of Floating IPs the current user or team may have.
     * <br><br>Requires `reserved_ip:read` scope.
     * 
     *
     * @return int
     */
    public function getFloatingIpLimit(): int
    {
        return $this->floatingIpLimit;
    }
    /**
    * The total number of Floating IPs the current user or team may have.
    <br><br>Requires `reserved_ip:read` scope.
    
    *
    * @param int $floatingIpLimit
    *
    * @return self
    */
    public function setFloatingIpLimit(int $floatingIpLimit): self
    {
        $this->initialized['floatingIpLimit'] = true;
        $this->floatingIpLimit = $floatingIpLimit;
        return $this;
    }
    /**
     * The email address used by the current user to register for DigitalOcean.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * The email address used by the current user to register for DigitalOcean.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The display name for the current user.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The display name for the current user.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The unique universal identifier for the current user.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * The unique universal identifier for the current user.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * If true, the user has verified their account via email. False otherwise.
     *
     * @return bool
     */
    public function getEmailVerified(): bool
    {
        return $this->emailVerified;
    }
    /**
     * If true, the user has verified their account via email. False otherwise.
     *
     * @param bool $emailVerified
     *
     * @return self
     */
    public function setEmailVerified(bool $emailVerified): self
    {
        $this->initialized['emailVerified'] = true;
        $this->emailVerified = $emailVerified;
        return $this;
    }
    /**
     * This value is one of "active", "warning" or "locked".
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * This value is one of "active", "warning" or "locked".
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * A human-readable message giving more details about the status of the account.
     *
     * @return string
     */
    public function getStatusMessage(): string
    {
        return $this->statusMessage;
    }
    /**
     * A human-readable message giving more details about the status of the account.
     *
     * @param string $statusMessage
     *
     * @return self
     */
    public function setStatusMessage(string $statusMessage): self
    {
        $this->initialized['statusMessage'] = true;
        $this->statusMessage = $statusMessage;
        return $this;
    }
    /**
     * When authorized in a team context, includes information about the current team.
     *
     * @return AccountTeam
     */
    public function getTeam(): AccountTeam
    {
        return $this->team;
    }
    /**
     * When authorized in a team context, includes information about the current team.
     *
     * @param AccountTeam $team
     *
     * @return self
     */
    public function setTeam(AccountTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dropletLimit' => ['droplet_limit', 'getDropletLimit', 'setDropletLimit'], 'floatingIpLimit' => ['floating_ip_limit', 'getFloatingIpLimit', 'setFloatingIpLimit'], 'email' => ['email', 'getEmail', 'setEmail'], 'name' => ['name', 'getName', 'setName'], 'uuid' => ['uuid', 'getUuid', 'setUuid'], 'emailVerified' => ['email_verified', 'getEmailVerified', 'setEmailVerified'], 'status' => ['status', 'getStatus', 'setStatus'], 'statusMessage' => ['status_message', 'getStatusMessage', 'setStatusMessage'], 'team' => ['team', 'getTeam', 'setTeam']];
    }
}