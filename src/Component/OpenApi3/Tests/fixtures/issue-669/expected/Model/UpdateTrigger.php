<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UpdateTrigger implements AdditionalPropertiesInterface
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
     * Indicates weather the trigger is paused or unpaused.
     *
     * @var bool
     */
    protected $isEnabled;
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @var ScheduledDetails
     */
    protected $scheduledDetails;
    /**
     * Indicates weather the trigger is paused or unpaused.
     *
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }
    /**
     * Indicates weather the trigger is paused or unpaused.
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;
        return $this;
    }
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     * 
     *
     * @return ScheduledDetails
     */
    public function getScheduledDetails(): ScheduledDetails
    {
        return $this->scheduledDetails;
    }
    /**
     * Trigger details for SCHEDULED type, where body is optional.
     *
     * @param ScheduledDetails $scheduledDetails
     *
     * @return self
     */
    public function setScheduledDetails(ScheduledDetails $scheduledDetails): self
    {
        $this->initialized['scheduledDetails'] = true;
        $this->scheduledDetails = $scheduledDetails;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['isEnabled' => ['is_enabled', 'getIsEnabled', 'setIsEnabled'], 'scheduledDetails' => ['scheduled_details', 'getScheduledDetails', 'setScheduledDetails']];
    }
}