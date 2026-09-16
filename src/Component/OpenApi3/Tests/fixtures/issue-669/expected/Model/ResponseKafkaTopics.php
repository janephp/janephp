<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseKafkaTopics implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<iterable<string, mixed>>
     */
    public array $topics;
    public function definedProperties(): array
    {
        return ['topics' => 'topics'];
    }
}