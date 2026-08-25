<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsAssignAppAlertDestinationsRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $emails;
    /**
     * @var list<AppAlertSlackWebhook>
     */
    protected $slackWebhooks;
    /**
     * @return list<string>
     */
    public function getEmails(): array
    {
        return $this->emails;
    }
    /**
     * @param list<string> $emails
     *
     * @return self
     */
    public function setEmails(array $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;
        return $this;
    }
    /**
     * @return list<AppAlertSlackWebhook>
     */
    public function getSlackWebhooks(): array
    {
        return $this->slackWebhooks;
    }
    /**
     * @param list<AppAlertSlackWebhook> $slackWebhooks
     *
     * @return self
     */
    public function setSlackWebhooks(array $slackWebhooks): self
    {
        $this->initialized['slackWebhooks'] = true;
        $this->slackWebhooks = $slackWebhooks;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['emails' => ['emails', 'getEmails', 'setEmails'], 'slackWebhooks' => ['slack_webhooks', 'getSlackWebhooks', 'setSlackWebhooks']];
    }
}