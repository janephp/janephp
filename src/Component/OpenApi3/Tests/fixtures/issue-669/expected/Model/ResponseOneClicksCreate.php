<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseOneClicksCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A message about the result of the request.
     *
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['message' => 'message'];
    }
}