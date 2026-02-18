<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppIngressSpecRuleStringMatchExact extends \ArrayObject
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
     * @var string
     */
    protected $exact;
    /**
     * @return string
     */
    public function getExact(): string
    {
        return $this->exact;
    }
    /**
     * @param string $exact
     *
     * @return self
     */
    public function setExact(string $exact): self
    {
        $this->initialized['exact'] = true;
        $this->exact = $exact;
        return $this;
    }
}