<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesNodePoolTaint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @var string
     */
    public string $key;
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @var string
     */
    public string $value;
    /**
     * How the node reacts to pods that it won't tolerate. Available effect values are `NoSchedule`, `PreferNoSchedule`, and `NoExecute`.
     *
     * @var string
     */
    public string $effect;
    public function definedProperties(): array
    {
        return ['key' => 'key', 'value' => 'value', 'effect' => 'effect'];
    }
}