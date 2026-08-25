<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedResourceStatus implements AdditionalPropertiesInterface
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
     * An object containing information about a resource scheduled for deletion.
     *
     * @var DestroyedAssociatedResource
     */
    protected $droplet;
    /**
     * An object containing additional information about resource related to a Droplet requested to be destroyed.
     *
     * @var AssociatedResourceStatusResources
     */
    protected $resources;
    /**
     * A time value given in ISO8601 combined date and time format indicating when the requested action was completed.
     *
     * @var \DateTime
     */
    protected $completedAt;
    /**
     * A count of the associated resources that failed to be destroyed, if any.
     *
     * @var int
     */
    protected $failures;
    /**
     * An object containing information about a resource scheduled for deletion.
     *
     * @return DestroyedAssociatedResource
     */
    public function getDroplet(): DestroyedAssociatedResource
    {
        return $this->droplet;
    }
    /**
     * An object containing information about a resource scheduled for deletion.
     *
     * @param DestroyedAssociatedResource $droplet
     *
     * @return self
     */
    public function setDroplet(DestroyedAssociatedResource $droplet): self
    {
        $this->initialized['droplet'] = true;
        $this->droplet = $droplet;
        return $this;
    }
    /**
     * An object containing additional information about resource related to a Droplet requested to be destroyed.
     *
     * @return AssociatedResourceStatusResources
     */
    public function getResources(): AssociatedResourceStatusResources
    {
        return $this->resources;
    }
    /**
     * An object containing additional information about resource related to a Droplet requested to be destroyed.
     *
     * @param AssociatedResourceStatusResources $resources
     *
     * @return self
     */
    public function setResources(AssociatedResourceStatusResources $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format indicating when the requested action was completed.
     *
     * @return \DateTime
     */
    public function getCompletedAt(): \DateTime
    {
        return $this->completedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format indicating when the requested action was completed.
     *
     * @param \DateTime $completedAt
     *
     * @return self
     */
    public function setCompletedAt(\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * A count of the associated resources that failed to be destroyed, if any.
     *
     * @return int
     */
    public function getFailures(): int
    {
        return $this->failures;
    }
    /**
     * A count of the associated resources that failed to be destroyed, if any.
     *
     * @param int $failures
     *
     * @return self
     */
    public function setFailures(int $failures): self
    {
        $this->initialized['failures'] = true;
        $this->failures = $failures;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['droplet' => ['droplet', 'getDroplet', 'setDroplet'], 'resources' => ['resources', 'getResources', 'setResources'], 'completedAt' => ['completed_at', 'getCompletedAt', 'setCompletedAt'], 'failures' => ['failures', 'getFailures', 'setFailures']];
    }
}