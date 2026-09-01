<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGetExecResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A websocket URL that allows sending/receiving console input and receiving console output.
     *
     * @var string
     */
    public string $url;
    public function definedProperties(): array
    {
        return ['url' => 'url'];
    }
}