<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterAutoscalerConfiguration implements AdditionalPropertiesInterface
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
     * Used to customize when cluster autoscaler scales down non-empty nodes by setting the node utilization threshold.
     *
     * @var float
     */
    protected $scaleDownUtilizationThreshold;
    /**
     * Used to customize how long a node is unneeded before being scaled down.
     *
     * @var string
     */
    protected $scaleDownUnneededTime;
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
    protected $expanders;
    /**
     * Used to customize when cluster autoscaler scales down non-empty nodes by setting the node utilization threshold.
     *
     * @return float
     */
    public function getScaleDownUtilizationThreshold(): float
    {
        return $this->scaleDownUtilizationThreshold;
    }
    /**
     * Used to customize when cluster autoscaler scales down non-empty nodes by setting the node utilization threshold.
     *
     * @param float $scaleDownUtilizationThreshold
     *
     * @return self
     */
    public function setScaleDownUtilizationThreshold(float $scaleDownUtilizationThreshold): self
    {
        $this->initialized['scaleDownUtilizationThreshold'] = true;
        $this->scaleDownUtilizationThreshold = $scaleDownUtilizationThreshold;
        return $this;
    }
    /**
     * Used to customize how long a node is unneeded before being scaled down.
     *
     * @return string
     */
    public function getScaleDownUnneededTime(): string
    {
        return $this->scaleDownUnneededTime;
    }
    /**
     * Used to customize how long a node is unneeded before being scaled down.
     *
     * @param string $scaleDownUnneededTime
     *
     * @return self
     */
    public function setScaleDownUnneededTime(string $scaleDownUnneededTime): self
    {
        $this->initialized['scaleDownUnneededTime'] = true;
        $this->scaleDownUnneededTime = $scaleDownUnneededTime;
        return $this;
    }
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
     * @return list<string>
     */
    public function getExpanders(): array
    {
        return $this->expanders;
    }
    /**
    * Customizes expanders used by cluster-autoscaler.
    The autoscaler will apply each expander from the provided list to narrow down the selection of node types created to scale up,
    until either a single node type is left, or the list of expanders is exhausted.
    If this flag is unset, autoscaler will use its default expander `random`.
    Passing an empty list (_not_ `null`) will unset any previous expander customizations.
    
    Available expanders:
    - `random`: Randomly selects a node group to scale.
    - `priority`: Selects the node group with the highest priority as per [user-provided configuration](https://docs.digitalocean.com/products/kubernetes/how-to/autoscale/#configuring-priority-expander)
    - `least_waste`: Selects the node group that will result in the least amount of idle resources.
    
    *
    * @param list<string> $expanders
    *
    * @return self
    */
    public function setExpanders(array $expanders): self
    {
        $this->initialized['expanders'] = true;
        $this->expanders = $expanders;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['scaleDownUtilizationThreshold' => ['scale_down_utilization_threshold', 'getScaleDownUtilizationThreshold', 'setScaleDownUtilizationThreshold'], 'scaleDownUnneededTime' => ['scale_down_unneeded_time', 'getScaleDownUnneededTime', 'setScaleDownUnneededTime'], 'expanders' => ['expanders', 'getExpanders', 'setExpanders']];
    }
}