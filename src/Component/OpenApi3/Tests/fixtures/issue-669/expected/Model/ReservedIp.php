<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIp extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The public IP address of the reserved IP. It also serves as its identifier.
     *
     * @var string
     */
    protected $ip;
    /**
     * @var ReservedIpRegion
     */
    protected $region;
    /**
     * The Droplet that the reserved IP has been assigned to. When you query a reserved IP, if it is assigned to a Droplet, the entire Droplet object will be returned. If it is not assigned, the value will be null.<br><br>Requires `droplet:read` scope.
     *
     * @var mixed
     */
    protected $droplet;
    /**
     * A boolean value indicating whether or not the reserved IP has pending actions preventing new ones from being submitted.
     *
     * @var bool
     */
    protected $locked;
    /**
     * The UUID of the project to which the reserved IP currently belongs.<br><br>Requires `project:read` scope.
     *
     * @var string
     */
    protected $projectId;
    /**
     * The public IP address of the reserved IP. It also serves as its identifier.
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * The public IP address of the reserved IP. It also serves as its identifier.
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * @return ReservedIpRegion
     */
    public function getRegion(): ReservedIpRegion
    {
        return $this->region;
    }
    /**
     * @param ReservedIpRegion $region
     *
     * @return self
     */
    public function setRegion(ReservedIpRegion $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The Droplet that the reserved IP has been assigned to. When you query a reserved IP, if it is assigned to a Droplet, the entire Droplet object will be returned. If it is not assigned, the value will be null.<br><br>Requires `droplet:read` scope.
     *
     * @return mixed
     */
    public function getDroplet()
    {
        return $this->droplet;
    }
    /**
     * The Droplet that the reserved IP has been assigned to. When you query a reserved IP, if it is assigned to a Droplet, the entire Droplet object will be returned. If it is not assigned, the value will be null.<br><br>Requires `droplet:read` scope.
     *
     * @param mixed $droplet
     *
     * @return self
     */
    public function setDroplet($droplet): self
    {
        $this->initialized['droplet'] = true;
        $this->droplet = $droplet;
        return $this;
    }
    /**
     * A boolean value indicating whether or not the reserved IP has pending actions preventing new ones from being submitted.
     *
     * @return bool
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }
    /**
     * A boolean value indicating whether or not the reserved IP has pending actions preventing new ones from being submitted.
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;
        return $this;
    }
    /**
     * The UUID of the project to which the reserved IP currently belongs.<br><br>Requires `project:read` scope.
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The UUID of the project to which the reserved IP currently belongs.<br><br>Requires `project:read` scope.
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
}