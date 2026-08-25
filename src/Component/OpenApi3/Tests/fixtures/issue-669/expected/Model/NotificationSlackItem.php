<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NotificationSlackItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Slack channel to notify of an alert trigger.
     *
     * @var string
     */
    protected $channel;
    /**
     * Slack Webhook URL.
     *
     * @var string
     */
    protected $url;
    /**
     * Slack channel to notify of an alert trigger.
     *
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }
    /**
     * Slack channel to notify of an alert trigger.
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel(string $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
        return $this;
    }
    /**
     * Slack Webhook URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Slack Webhook URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['channel' => ['channel', 'getChannel', 'setChannel'], 'url' => ['url', 'getUrl', 'setUrl']];
    }
}