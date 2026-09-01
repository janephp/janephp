<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class TripsGetJsonResponse200Links implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $self;
    /**
     * @var string
     */
    public string $next;
    /**
     * @var string
     */
    public string $prev;
    public function definedProperties(): array
    {
        return ['self' => 'self', 'next' => 'next', 'prev' => 'prev'];
    }
}