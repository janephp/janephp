<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Notification implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An email to notify on an alert trigger. The Email has to be one that is verified on that DigitalOcean account.
     *
     * @var list<string>
     */
    public array $email;
    /**
     * Slack integration details.
     *
     * @var list<NotificationSlackItem>
     */
    public array $slack;
    public function definedProperties(): array
    {
        return ['email' => 'email', 'slack' => 'slack'];
    }
}