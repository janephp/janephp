<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlert implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $componentName;
    /**
     * @var AppAlertSpec
     */
    protected $spec;
    /**
     * @var list<string>
     */
    protected $emails;
    /**
     * @var list<AppAlertSlackWebhook>
     */
    protected $slackWebhooks;
    /**
     * @var string
     */
    protected $phase = 'UNKNOWN';
    /**
     * @var AppAlertProgress
     */
    protected $progress;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getComponentName(): string
    {
        return $this->componentName;
    }
    /**
     * @param string $componentName
     *
     * @return self
     */
    public function setComponentName(string $componentName): self
    {
        $this->initialized['componentName'] = true;
        $this->componentName = $componentName;
        return $this;
    }
    /**
     * @return AppAlertSpec
     */
    public function getSpec(): AppAlertSpec
    {
        return $this->spec;
    }
    /**
     * @param AppAlertSpec $spec
     *
     * @return self
     */
    public function setSpec(AppAlertSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
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
    /**
     * @return string
     */
    public function getPhase(): string
    {
        return $this->phase;
    }
    /**
     * @param string $phase
     *
     * @return self
     */
    public function setPhase(string $phase): self
    {
        $this->initialized['phase'] = true;
        $this->phase = $phase;
        return $this;
    }
    /**
     * @return AppAlertProgress
     */
    public function getProgress(): AppAlertProgress
    {
        return $this->progress;
    }
    /**
     * @param AppAlertProgress $progress
     *
     * @return self
     */
    public function setProgress(AppAlertProgress $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'componentName' => ['component_name', 'getComponentName', 'setComponentName'], 'spec' => ['spec', 'getSpec', 'setSpec'], 'emails' => ['emails', 'getEmails', 'setEmails'], 'slackWebhooks' => ['slack_webhooks', 'getSlackWebhooks', 'setSlackWebhooks'], 'phase' => ['phase', 'getPhase', 'setPhase'], 'progress' => ['progress', 'getProgress', 'setProgress']];
    }
}