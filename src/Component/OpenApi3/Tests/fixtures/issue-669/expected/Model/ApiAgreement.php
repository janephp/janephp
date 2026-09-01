<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgreement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $url;
    /**
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['description' => 'description', 'name' => 'name', 'url' => 'url', 'uuid' => 'uuid'];
    }
}