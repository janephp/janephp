<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Member implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier of the Droplet.
     *
     * @var int
     */
    public int $dropletId;
    /**
     * The creation time of the Droplet in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The last updated time of the Droplet in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * The health status of the Droplet.
     *
     * @var string
     */
    public string $healthStatus;
    /**
     * The power status of the Droplet.
     *
     * @var string
     */
    public string $status;
    /**
     * @var MemberCurrentUtilization
     */
    public MemberCurrentUtilization $currentUtilization;
    public function definedProperties(): array
    {
        return ['dropletId' => 'droplet_id', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'healthStatus' => 'health_status', 'status' => 'status', 'currentUtilization' => 'current_utilization'];
    }
}