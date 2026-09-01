<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Alerts implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An email to notify on an alert trigger.
     *
     * @var list<string>
     */
    public array $email;
    /**
     * Slack integration details.
     *
     * @var list<SlackDetails>
     */
    public array $slack;
    public function definedProperties(): array
    {
        return ['email' => 'email', 'slack' => 'slack'];
    }
}