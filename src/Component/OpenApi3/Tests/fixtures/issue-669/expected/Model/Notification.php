<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Notification implements AdditionalPropertiesInterface
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
     * An email to notify on an alert trigger. The Email has to be one that is verified on that DigitalOcean account.
     *
     * @var list<string>
     */
    protected $email;
    /**
     * Slack integration details.
     *
     * @var list<NotificationSlackItem>
     */
    protected $slack;
    /**
     * An email to notify on an alert trigger. The Email has to be one that is verified on that DigitalOcean account.
     *
     * @return list<string>
     */
    public function getEmail(): array
    {
        return $this->email;
    }
    /**
     * An email to notify on an alert trigger. The Email has to be one that is verified on that DigitalOcean account.
     *
     * @param list<string> $email
     *
     * @return self
     */
    public function setEmail(array $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Slack integration details.
     *
     * @return list<NotificationSlackItem>
     */
    public function getSlack(): array
    {
        return $this->slack;
    }
    /**
     * Slack integration details.
     *
     * @param list<NotificationSlackItem> $slack
     *
     * @return self
     */
    public function setSlack(array $slack): self
    {
        $this->initialized['slack'] = true;
        $this->slack = $slack;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['email' => ['email', 'getEmail', 'setEmail'], 'slack' => ['slack', 'getSlack', 'setSlack']];
    }
}