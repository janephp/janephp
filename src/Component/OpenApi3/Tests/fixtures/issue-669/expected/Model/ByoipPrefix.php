<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefix implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the BYOIP prefix
     *
     * @var string
     */
    public string $uuid;
    /**
     * Name of the BYOIP prefix
     *
     * @var string
     */
    public string $name;
    /**
     * The IP prefix in CIDR notation
     *
     * @var string
     */
    public string $prefix;
    /**
     * Status of the BYOIP prefix
     *
     * @var string
     */
    public string $status;
    /**
     * Region where the BYOIP prefix is located
     *
     * @var string
     */
    public string $region;
    /**
     * List of validation statuses for the BYOIP prefix
     *
     * @var list<ByoipPrefixValidationsItem>
     */
    public array $validations;
    /**
     * Reason for failure, if applicable
     *
     * @var string
     */
    public string $failureReason;
    /**
     * Whether the BYOIP prefix is locked
     *
     * @var bool
     */
    public bool $locked;
    /**
     * Whether the BYOIP prefix is being advertised
     *
     * @var bool
     */
    public bool $advertised;
    /**
     * The ID of the project associated with the BYOIP prefix
     *
     * @var string
     */
    public string $projectId;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'name' => 'name', 'prefix' => 'prefix', 'status' => 'status', 'region' => 'region', 'validations' => 'validations', 'failureReason' => 'failure_reason', 'locked' => 'locked', 'advertised' => 'advertised', 'projectId' => 'project_id'];
    }
}