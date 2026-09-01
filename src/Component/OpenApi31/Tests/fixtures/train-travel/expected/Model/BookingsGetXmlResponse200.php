<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class BookingsGetXmlResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Booking>
     */
    public array $data;
    /**
     * @var BookingsGetXmlResponse200Links
     */
    public BookingsGetXmlResponse200Links $links;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'links' => 'links'];
    }
}