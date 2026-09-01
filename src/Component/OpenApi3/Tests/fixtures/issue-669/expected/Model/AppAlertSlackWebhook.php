<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlertSlackWebhook implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $url;
    /**
     * @var string
     */
    public string $channel;
    public function definedProperties(): array
    {
        return ['url' => 'url', 'channel' => 'channel'];
    }
}