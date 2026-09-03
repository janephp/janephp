<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class LinksOrigin implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $self;
    public function definedProperties(): array
    {
        return ['self' => 'self'];
    }
}