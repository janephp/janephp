<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsAssignAppAlertDestinationsRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $emails;
    /**
     * @var list<AppAlertSlackWebhook>
     */
    public array $slackWebhooks;
    public function definedProperties(): array
    {
        return ['emails' => 'emails', 'slackWebhooks' => 'slack_webhooks'];
    }
}