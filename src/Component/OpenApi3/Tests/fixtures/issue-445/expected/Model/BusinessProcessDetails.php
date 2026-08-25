<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetails extends BusinessProcess implements AdditionalPropertiesInterface
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
     * Details for the business process.
     *
     * @var mixed|null
     */
    protected $details;
    /**
     * Details for the business process.
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Details for the business process.
     *
     * @param mixed $details
     *
     * @return self
     */
    public function setDetails($details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['details' => ['details', 'getDetails', 'setDetails']];
    }
}