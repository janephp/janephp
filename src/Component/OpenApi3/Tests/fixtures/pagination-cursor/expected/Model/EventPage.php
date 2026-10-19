<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalPropertiesInterface;
class EventPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Event>
     */
    public array $events;
    /**
     * @var string|null
     */
    public ?string $nextAfter;
    public function definedProperties(): array
    {
        return ['events' => 'events', 'nextAfter' => 'nextAfter'];
    }
}