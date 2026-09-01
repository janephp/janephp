<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FloatingIp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The public IP address of the floating IP. It also serves as its identifier.
     *
     * @var string
     */
    public string $ip;
    /**
     * @var FloatingIpRegion
     */
    public FloatingIpRegion $region;
    /**
     * The Droplet that the floating IP has been assigned to. When you query a floating IP, if it is assigned to a Droplet, the entire Droplet object will be returned. If it is not assigned, the value will be null. <br><br>Requires `droplet:read` scope.
     *
     * @var array<string, mixed>|Droplet
     */
    public $droplet;
    /**
     * A boolean value indicating whether or not the floating IP has pending actions preventing new ones from being submitted.
     *
     * @var bool
     */
    public bool $locked;
    /**
     * The UUID of the project to which the reserved IP currently belongs.<br><br>Requires `project:read` scope.
     *
     * @var string
     */
    public string $projectId;
    public function definedProperties(): array
    {
        return ['ip' => 'ip', 'region' => 'region', 'droplet' => 'droplet', 'locked' => 'locked', 'projectId' => 'project_id'];
    }
}