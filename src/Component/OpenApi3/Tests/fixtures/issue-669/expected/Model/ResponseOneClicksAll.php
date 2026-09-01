<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseOneClicksAll implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<OneClicks>
     */
    public array $n1Clicks;
    public function definedProperties(): array
    {
        return ['n1Clicks' => '1_clicks'];
    }
}