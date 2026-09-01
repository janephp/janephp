<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Event implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var \DateTime|null
     */
    public ?\DateTime $eventDate;
    /**
     * @var \DateTime|null
     */
    public ?\DateTime $createdAt;
    /**
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * @var string|null
     */
    public ?string $plainDate;
    public function definedProperties(): array
    {
        return ['eventDate' => 'eventDate', 'createdAt' => 'createdAt', 'updatedAt' => 'updatedAt', 'plainDate' => 'plainDate'];
    }
}