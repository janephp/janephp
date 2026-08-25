<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefix implements AdditionalPropertiesInterface
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
     * Unique identifier for the BYOIP prefix
     *
     * @var string
     */
    protected $uuid;
    /**
     * Name of the BYOIP prefix
     *
     * @var string
     */
    protected $name;
    /**
     * The IP prefix in CIDR notation
     *
     * @var string
     */
    protected $prefix;
    /**
     * Status of the BYOIP prefix
     *
     * @var string
     */
    protected $status;
    /**
     * Region where the BYOIP prefix is located
     *
     * @var string
     */
    protected $region;
    /**
     * List of validation statuses for the BYOIP prefix
     *
     * @var list<ByoipPrefixValidationsItem>
     */
    protected $validations;
    /**
     * Reason for failure, if applicable
     *
     * @var string
     */
    protected $failureReason;
    /**
     * Whether the BYOIP prefix is locked
     *
     * @var bool
     */
    protected $locked;
    /**
     * Whether the BYOIP prefix is being advertised
     *
     * @var bool
     */
    protected $advertised;
    /**
     * The ID of the project associated with the BYOIP prefix
     *
     * @var string
     */
    protected $projectId;
    /**
     * Unique identifier for the BYOIP prefix
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique identifier for the BYOIP prefix
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
     * Name of the BYOIP prefix
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the BYOIP prefix
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
     * The IP prefix in CIDR notation
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * The IP prefix in CIDR notation
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Status of the BYOIP prefix
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of the BYOIP prefix
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
     * Region where the BYOIP prefix is located
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region where the BYOIP prefix is located
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * List of validation statuses for the BYOIP prefix
     *
     * @return list<ByoipPrefixValidationsItem>
     */
    public function getValidations(): array
    {
        return $this->validations;
    }
    /**
     * List of validation statuses for the BYOIP prefix
     *
     * @param list<ByoipPrefixValidationsItem> $validations
     *
     * @return self
     */
    public function setValidations(array $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
    /**
     * Reason for failure, if applicable
     *
     * @return string
     */
    public function getFailureReason(): string
    {
        return $this->failureReason;
    }
    /**
     * Reason for failure, if applicable
     *
     * @param string $failureReason
     *
     * @return self
     */
    public function setFailureReason(string $failureReason): self
    {
        $this->initialized['failureReason'] = true;
        $this->failureReason = $failureReason;
        return $this;
    }
    /**
     * Whether the BYOIP prefix is locked
     *
     * @return bool
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }
    /**
     * Whether the BYOIP prefix is locked
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
     * Whether the BYOIP prefix is being advertised
     *
     * @return bool
     */
    public function getAdvertised(): bool
    {
        return $this->advertised;
    }
    /**
     * Whether the BYOIP prefix is being advertised
     *
     * @param bool $advertised
     *
     * @return self
     */
    public function setAdvertised(bool $advertised): self
    {
        $this->initialized['advertised'] = true;
        $this->advertised = $advertised;
        return $this;
    }
    /**
     * The ID of the project associated with the BYOIP prefix
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with the BYOIP prefix
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
    public function definedProperties(): array
    {
        return ['uuid' => ['uuid', 'getUuid', 'setUuid'], 'name' => ['name', 'getName', 'setName'], 'prefix' => ['prefix', 'getPrefix', 'setPrefix'], 'status' => ['status', 'getStatus', 'setStatus'], 'region' => ['region', 'getRegion', 'setRegion'], 'validations' => ['validations', 'getValidations', 'setValidations'], 'failureReason' => ['failure_reason', 'getFailureReason', 'setFailureReason'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'advertised' => ['advertised', 'getAdvertised', 'setAdvertised'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId']];
    }
}