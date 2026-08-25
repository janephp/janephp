<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessCancellationRequestedEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $businessProcessId;
    /**
     * @return string|null
     */
    public function getBusinessProcessId(): ?string
    {
        return $this->businessProcessId;
    }
    /**
     * @param string|null $businessProcessId
     *
     * @return self
     */
    public function setBusinessProcessId(?string $businessProcessId): self
    {
        $this->initialized['businessProcessId'] = true;
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['businessProcessId' => ['businessProcessId', 'getBusinessProcessId', 'setBusinessProcessId']];
    }
}