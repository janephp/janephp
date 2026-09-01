<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AlertPolicyRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Alerts
     */
    public Alerts $alerts;
    /**
     * @var string
     */
    public string $compare;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var bool
     */
    public bool $enabled;
    /**
     * @var list<string>
     */
    public array $entities;
    /**
     * @var list<string>
     */
    public array $tags;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var float
     */
    public float $value;
    /**
     * @var string
     */
    public string $window;
    public function definedProperties(): array
    {
        return ['alerts' => 'alerts', 'compare' => 'compare', 'description' => 'description', 'enabled' => 'enabled', 'entities' => 'entities', 'tags' => 'tags', 'type' => 'type', 'value' => 'value', 'window' => 'window'];
    }
}