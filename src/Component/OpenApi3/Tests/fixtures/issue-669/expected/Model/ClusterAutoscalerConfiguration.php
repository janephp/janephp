<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterAutoscalerConfiguration implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Used to customize when cluster autoscaler scales down non-empty nodes by setting the node utilization threshold.
     *
     * @var float
     */
    public float $scaleDownUtilizationThreshold;
    /**
     * Used to customize how long a node is unneeded before being scaled down.
     *
     * @var string
     */
    public string $scaleDownUnneededTime;
    /**
     * Customizes expanders used by cluster-autoscaler.
     * The autoscaler will apply each expander from the provided list to narrow down the selection of node types created to scale up,
     * until either a single node type is left, or the list of expanders is exhausted.
     * If this flag is unset, autoscaler will use its default expander `random`.
     * Passing an empty list (_not_ `null`) will unset any previous expander customizations.
     * 
     * Available expanders:
     * - `random`: Randomly selects a node group to scale.
     * - `priority`: Selects the node group with the highest priority as per [user-provided configuration](https://docs.digitalocean.com/products/kubernetes/how-to/autoscale/#configuring-priority-expander)
     * - `least_waste`: Selects the node group that will result in the least amount of idle resources.
     * 
     *
     * @var list<string>
     */
    public array $expanders;
    public function definedProperties(): array
    {
        return ['scaleDownUtilizationThreshold' => 'scale_down_utilization_threshold', 'scaleDownUnneededTime' => 'scale_down_unneeded_time', 'expanders' => 'expanders'];
    }
}