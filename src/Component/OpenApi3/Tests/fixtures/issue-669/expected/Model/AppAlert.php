<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlert implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $componentName;
    /**
     * @var AppAlertSpec
     */
    public AppAlertSpec $spec;
    /**
     * @var list<string>
     */
    public array $emails;
    /**
     * @var list<AppAlertSlackWebhook>
     */
    public array $slackWebhooks;
    /**
     * @var string
     */
    public string $phase = 'UNKNOWN';
    /**
     * @var AppAlertProgress
     */
    public AppAlertProgress $progress;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'componentName' => 'component_name', 'spec' => 'spec', 'emails' => 'emails', 'slackWebhooks' => 'slack_webhooks', 'phase' => 'phase', 'progress' => 'progress'];
    }
}