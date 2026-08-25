<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ScheduledDetails implements AdditionalPropertiesInterface
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
     * valid cron expression string which is required for SCHEDULED type triggers.
     *
     * @var string
     */
    protected $cron;
    /**
     * Optional data to be sent to function while triggering the function.
     *
     * @var ScheduledDetailsBody|null
     */
    protected $body;
    /**
     * valid cron expression string which is required for SCHEDULED type triggers.
     *
     * @return string
     */
    public function getCron(): string
    {
        return $this->cron;
    }
    /**
     * valid cron expression string which is required for SCHEDULED type triggers.
     *
     * @param string $cron
     *
     * @return self
     */
    public function setCron(string $cron): self
    {
        $this->initialized['cron'] = true;
        $this->cron = $cron;
        return $this;
    }
    /**
     * Optional data to be sent to function while triggering the function.
     *
     * @return ScheduledDetailsBody|null
     */
    public function getBody(): ?ScheduledDetailsBody
    {
        return $this->body;
    }
    /**
     * Optional data to be sent to function while triggering the function.
     *
     * @param ScheduledDetailsBody|null $body
     *
     * @return self
     */
    public function setBody(?ScheduledDetailsBody $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['cron' => ['cron', 'getCron', 'setCron'], 'body' => ['body', 'getBody', 'setBody']];
    }
}