<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SlackDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Slack channel to notify of an alert trigger.
     *
     * @var string
     */
    public string $channel;
    /**
     * Slack Webhook URL.
     *
     * @var string
     */
    public string $url;
    public function definedProperties(): array
    {
        return ['channel' => 'channel', 'url' => 'url'];
    }
}