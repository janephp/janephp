<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class StationsGetXmlResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Station>
     */
    public array $data;
    /**
     * @var StationsGetXmlResponse200Links
     */
    public StationsGetXmlResponse200Links $links;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'links' => 'links'];
    }
}