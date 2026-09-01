<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseListSinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of sinks identified by their URNs.
     *
     * @var list<SinksResponse>
     */
    public array $sinks;
    public function definedProperties(): array
    {
        return ['sinks' => 'sinks'];
    }
}