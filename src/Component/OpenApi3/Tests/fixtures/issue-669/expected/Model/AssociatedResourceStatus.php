<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedResourceStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An object containing information about a resource scheduled for deletion.
     *
     * @var DestroyedAssociatedResource
     */
    public DestroyedAssociatedResource $droplet;
    /**
     * An object containing additional information about resource related to a Droplet requested to be destroyed.
     *
     * @var AssociatedResourceStatusResources
     */
    public AssociatedResourceStatusResources $resources;
    /**
     * A time value given in ISO8601 combined date and time format indicating when the requested action was completed.
     *
     * @var \DateTime
     */
    public \DateTime $completedAt;
    /**
     * A count of the associated resources that failed to be destroyed, if any.
     *
     * @var int
     */
    public int $failures;
    public function definedProperties(): array
    {
        return ['droplet' => 'droplet', 'resources' => 'resources', 'completedAt' => 'completed_at', 'failures' => 'failures'];
    }
}