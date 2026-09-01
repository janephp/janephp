<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The amount of instances that this component should be scaled to. Default: 1. Must not be set if autoscaling is used.
     *
     * @var int
     */
    public int $instanceCount = 1;
    /**
     * The instance size to use for this component. Default: `apps-s-1vcpu-0.5gb`
     *
     * @var string
     */
    public $instanceSizeSlug;
    /**
     * Configuration for automatically scaling this component based on metrics.
     *
     * @var AppComponentInstanceBaseAutoscaling
     */
    public AppComponentInstanceBaseAutoscaling $autoscaling;
    public function definedProperties(): array
    {
        return ['instanceCount' => 'instance_count', 'instanceSizeSlug' => 'instance_size_slug', 'autoscaling' => 'autoscaling'];
    }
}