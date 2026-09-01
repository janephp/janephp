<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DestroyedAssociatedResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the resource scheduled for deletion.
     *
     * @var string
     */
    public string $id;
    /**
     * The name of the resource scheduled for deletion.
     *
     * @var string
     */
    public string $name;
    /**
     * A time value given in ISO8601 combined date and time format indicating when the resource was destroyed if the request was successful.
     *
     * @var \DateTime
     */
    public \DateTime $destroyedAt;
    /**
     * A string indicating that the resource was not successfully destroyed and providing additional information.
     *
     * @var string
     */
    public string $errorMessage;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'destroyedAt' => 'destroyed_at', 'errorMessage' => 'error_message'];
    }
}