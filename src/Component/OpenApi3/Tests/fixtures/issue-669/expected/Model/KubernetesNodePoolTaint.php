<?php

namespace Jane\Generated\DigitalOcean\Model;

class KubernetesNodePoolTaint extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @var string
     */
    protected $key;
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @var string
     */
    protected $value;
    /**
     * How the node reacts to pods that it won't tolerate. Available effect values are `NoSchedule`, `PreferNoSchedule`, and `NoExecute`.
     *
     * @var string
     */
    protected $effect;
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * An arbitrary string. The `key` and `value` fields of the `taint` object form a key-value pair. For example, if the value of the `key` field is "special" and the value of the `value` field is "gpu", the key value pair would be `special=gpu`.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * How the node reacts to pods that it won't tolerate. Available effect values are `NoSchedule`, `PreferNoSchedule`, and `NoExecute`.
     *
     * @return string
     */
    public function getEffect(): string
    {
        return $this->effect;
    }
    /**
     * How the node reacts to pods that it won't tolerate. Available effect values are `NoSchedule`, `PreferNoSchedule`, and `NoExecute`.
     *
     * @param string $effect
     *
     * @return self
     */
    public function setEffect(string $effect): self
    {
        $this->initialized['effect'] = true;
        $this->effect = $effect;
        return $this;
    }
}